<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();
        Post::factory(10)->create();
        Comment::factory(10)->create();
        
        // create comment guest
        for($i = 1; $i <= 5; $i++) {
            Comment::create([
                'post_id' => Post::all()->random()->id,
                'name' => "Guest {$i}",
                'email' => "guest{$i}@gmail.com",
                'comment' => "Ini komen guest {$i}"
            ]);
        }
    }
}
