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
    public function definition()
    {
        $heart = [false, true];

        return [
            'title' => fake()->sentence(3),
            'description' => fake()->text(),
            'price' => fake()->numberBetween(200, 900),
            // 'slug' => fake()->text(100),
            'released_at' => fake()->date(),
            'heart' => $heart[array_rand($heart)],
            'color' => fake()->text(),
            // 'cover' => $cover[array_rand($cover)],
            'promo' => fake()->numberBetween(0, 100),
            'category_id' => Category::factory(),
        ];
    }

}