<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reply>
 */
class ReplyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'body'  => fake()->paragraph ,
            'user_id' => \App\Models\User::factory(),
            'thread_id' => \App\Models\Thread::factory(),
        ];
    }
}
