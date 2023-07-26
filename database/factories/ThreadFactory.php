<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Thread;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Thread>
 */
class ThreadFactory extends Factory
{
    protected $model = Thread::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence ,
            'body'  => fake()->paragraph ,
//            'user_id'   => function(){
//                    return factory('App\Models\User')->create()->id ;
//                },
            'user_id' => \App\Models\User::factory(),
        ];
    }
}
