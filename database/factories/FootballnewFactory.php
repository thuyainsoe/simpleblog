<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Footballnew>
 */
class FootballnewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'author' => fake()->name(),
            'content' => fake()->paragraphs(3, true),
            'tags' => fake()->words(3, true),
            'image_url' => fake()->optional()->imageUrl(),
            'views' => fake()->numberBetween(0, 1000),
            'likes' => fake()->numberBetween(0, 1000),
            'comments' => fake()->numberBetween(0, 100),
        ];
    }
}
