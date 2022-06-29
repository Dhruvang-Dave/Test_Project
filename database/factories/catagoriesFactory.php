<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Post;
use App\Models\catagories;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\catagories>
 */
class catagoriesFactory extends Factory
{
    protected $model = catagories::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'slug' => $this->faker->slug,
            
        ];
        
    }
}
