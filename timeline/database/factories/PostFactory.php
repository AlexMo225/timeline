<?php

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = \App\Models\Post::class;

    public function definition()
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'body' => $this->faker->text(180),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
