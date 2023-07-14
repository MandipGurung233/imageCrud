<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'image'=>fake()->imageUrl($width=50,$height=50),
            'title' =>fake()->sentence(),
            'description' => fake()->paragraph(),
            'category_id' =>rand(1,4),

        ];
    }
}
