<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Reply;
use App\Models\Thread;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ThreadsTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        $this->thread = Thread::factory()->create();
    }

    public function test_a_user_can_view_threads()
    {
        $this->get('/threads')
            ->assertSee($this->thread->title);
    }

    public function test_a_user_can_view_a_single_thread()
    {
        $this->get($this->thread->path())
            ->assertSee($this->thread->title);
    }

    public function test_a_user_can_view_a_reply_associated_with_a_thread()
    {
        $reply = Reply::factory()->create([
            'thread_id' => $this->thread->id,
            'user_id' => $this->thread->user_id
        ]);

        $this->get($this->thread->path())
            ->assertSee($reply->body);

    }

    public function test_a_user_can_filter_threads_according_to_category()
    {
        $category = category::factory()->create();

        $threadInCategory = Thread::factory()->create(['category_id' => $category->id]);
        $threadNotInCategory = Thread::factory()->create();

        $this->get('/threads/' . $category->slug)
            ->assertSee($threadInCategory->title)
            ->assertDontSee($threadNotInCategory->title);
    }
}
