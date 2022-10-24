<?php

namespace Tests\Unit;

use App\Models\Category;
use App\Models\Reply;
use App\Models\Thread;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ThreadTest extends TestCase
{

    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        $this->thread = Thread::factory()->create();
    }

    public function test_a_thread_has_replies()
    {
        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $this->thread->replies);
    }

    public function test_a_thread_has_a_creator()
    {
        $this->assertInstanceOf(User::class, $this->thread->creator);
    }

    public function test_a_thread_can_add_a_reply()
    {
        $this->thread->addReply([
            'body' => 'foo',
            'user_id' => 1
        ]);

        $this->assertCount(1, $this->thread->replies);
    }

    public function test_a_thread_belongs_to_a_category()
    {
        $thread = Thread::factory()->create();
        $this->assertInstanceOf(Category::class, $thread->category);
    }

    public function test_a_thread_can_make_a_string_path()
    {
        $thread = Thread::factory()->create();
        $this->assertEquals('/threads/' . $thread->category->slug . '/' . $thread->id, $thread->path());
    }
}
