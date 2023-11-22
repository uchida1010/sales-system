<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;


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
        $category = ['プラスチックパレット', '木製パレット', 'ネスティングラック', 'IBCコンテナ', 'メッシュパレット', 'カゴ台車'];
        return [
            'category' => Arr::random($category),
            'name' => fake()->sentence(rand(1,4)),
            'quantity' => fake()->numberBetween(1, 10),
            'specification' => fake()->text(10),
        ];
    }
}
