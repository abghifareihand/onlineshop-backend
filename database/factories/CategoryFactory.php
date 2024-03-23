<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categoryNames = ['Best Seller', 'Top Rated', 'Flash Sale', 'Discount', 'Special'];
        return [
            'name' => $this->faker->randomElement($categoryNames),
            'description' => fake()->sentence(),
            'image' => fake()->imageUrl(),
        ];
    }
}
