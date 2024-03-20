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
        $categoryNames = ['Electronics', 'Clothing', 'Kitchen', 'Books', 'Sports', 'Beauty', 'Toys', 'Automotive', 'Health', 'Furniture', 'Home', 'Tools',];
        return [
            'name' => Arr::random($categoryNames),
            'description' => fake()->sentence(),
            'image' => 'https://via.placeholder.com/300',
        ];
    }
}
