<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Estimate>
 */
class EstimateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'estimated_date' => fake()->dateTimeBetween('+1 week', '+2 week'),
            'is_result' => fake()->boolean(50),
            'specification' => fake()->text(10),
            'content' => fake()->text(20),
            'quantity' => fake()->numberBetween(1, 10),
            'reason' => fake()->text(30),
        ];
    }
}
