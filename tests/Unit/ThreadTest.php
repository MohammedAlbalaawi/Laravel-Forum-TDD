<?php

namespace Tests\Unit;

use App\Models\Reply;
use App\Models\Thread;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ThreadTest extends TestCase
{

    use RefreshDatabase;

    public function test_a_thread_has_replies(){
        $thread = Thread::factory()->create();
        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $thread->replies);
    }
    public function test_a_thread_has_a_creator()
    {
        $reply = Thread::factory()->create();
        $this->assertInstanceOf(User::class, $reply->creator);
    }
}
