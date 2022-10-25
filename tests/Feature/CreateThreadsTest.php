<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Thread;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateThreadsTest extends TestCase
{
    use refreshDatabase;

    public function test_guests_cant_create_threads()
    {
        $this->withoutExceptionHandling();
        $this->expectException('Illuminate\Auth\AuthenticationException');

        $this->post('/threads', []);
    }

    public function test_guests_cant_see_the_create_thread_page()
    {

        $this->get('/threads/create')
            ->assertRedirect('/login');
    }

    public function test_an_authenticated_user_can_create_new_forum_threads()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $thread = Thread::factory()->create();
        $this->post('/threads', $thread->toArray());

        $this->get($thread->path())
            ->assertSee($thread->title);

        /*
        - Or we can use this with make() - because make() doesn't create id
        - $user = User::factory()->create();
        - $this->actingAs($user);

        - $thread = Thread::factory()->make();
        -$response =  $this->post('/threads', $thread->toArray());

        - $this->get($response->headers->get('location'))
            ->assertSee($thread->title);
         */
    }

    public function test_a_thread_requires_a_title()
    {
        $this->publishThread(['title' => null])
            ->assertSessionHasErrors('title');
    }

    public function test_a_thread_requires_a_body()
    {
        $this->publishThread(['body' => null])
            ->assertSessionHasErrors('body');
    }

    public function test_a_thread_requires_a_category_id()
    {
        Category::factory(2)->create();

        $this->publishThread(['category_id' => null])
            ->assertSessionHasErrors('category_id');

        $this->publishThread(['category_id' => 999])
            ->assertSessionHasErrors('category_id');
    }

    private function publishThread($overrides = [])
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $thread = Thread::factory()->make($overrides);

        return $this->post('/threads', $thread->toArray());
    }
}
