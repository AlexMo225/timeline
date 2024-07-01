<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    \App\Models\User::factory(10)->create()->each(function ($user) {
        \App\Models\Post::factory(5)->create(['user_id' => $user->id]);
    });
}

}
