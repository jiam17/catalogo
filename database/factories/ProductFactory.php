<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->words(asText: true),
            'description' => fake()->words(asText: true),
            'price' => fake()->randomFloat(2),
            'review' => fake()->words(asText: true),
            'image' => fake()->imageUrl(),
            'available' => fake()->boolean(),
            'category_id' => Category::factory()
        ];
    }
}
