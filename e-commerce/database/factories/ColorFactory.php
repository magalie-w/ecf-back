<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Color>
 */
class ColorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $colorRandom = ['bleu', 'rouge', 'vert'];
        
        return [
            'color' => $colorRandom[array_rand($colorRandom)],
        ];
    }
}
