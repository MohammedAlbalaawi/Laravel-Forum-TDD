<?php

namespace Database\Factories;

use App\Models\Thread;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reply>
 */
class ReplyFactory extends Factory
{

    public function definition()
    {
        return [
            'user_id' => User::factory()->create()->id,
            'thread_id' => Thread::factory()->create()->id,
            'body' => $this->faker->paragraph,
        ];
    }
}
