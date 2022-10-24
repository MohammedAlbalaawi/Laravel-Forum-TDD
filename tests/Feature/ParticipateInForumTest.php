<?php

namespace Tests\Feature;

use App\Models\Reply;
use App\Models\Thread;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ParticipateInForumTest extends TestCase
{
    use RefreshDatabase;

    public function test_un_authenticated_user_cant_participate_in_forum()
    {
        $this->withoutExceptionHandling();
        $this->expectException('Illuminate\Auth\AuthenticationException');

        $this->post('/threads/slug/1/replies', []);

        // OR WE CAN USE
        // $this->post('/threads/1/replies', [])
        //        ->assertRedirect('/login');

    }
    public function test_an_authenticated_user_can_participate_in_forum()
    {
        //Authenticated user
        $user = User::factory()->create();
        $this->actingAs($user);

        // A thread that user may participate
        $thread = Thread::factory()->create();

        // A reply that user may write to a thread
        $reply = Reply::factory()->create();
        $this->post($thread->path() . '/replies', $reply->toArray());

        // A reply should visible in the page
        $this->get($thread->path())
            ->assertSee($reply->body);
    }
}
