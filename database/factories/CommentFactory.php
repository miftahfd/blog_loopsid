<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $user = User::all()->random();

        return [
            'post_id' => Post::all()->random()->id,
            'name' => $user->name,
            'email' => $user->email,
            'website' => $this->faker->domainName(),
            'comment' => $this->faker->sentence()
        ];
    }
}
