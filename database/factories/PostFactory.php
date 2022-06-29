<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Post;
use App\Models\catagories;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    Protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'catagories_id' => catagories::factory(),
            'user_id' => User::factory(),
            'Slug' => $this->faker->slug,
            'title' => $this->faker->sentence,
            'language' => $this->faker->word,
            'body' => $this->faker->paragraph,
            
        ];

    }
}
