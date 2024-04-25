<?php

namespace Database\Factories;

use App\Models\Brand;
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
            'name' => fake()->name(),
            'quantity' => fake()->randomDigitNotNull(),
            'description' => fake()->text(),
            'in_stock' => fake()->randomDigitNotNull(),
            'price' => fake()->randomFloat(2, 50000, 500000),
            'brand_id' => fake()->numberBetween(1, Brand::count()),
            'category_id' => fake()->numberBetween(1, Category::count()),
        ];
    }
}
