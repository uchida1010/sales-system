<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'company' => fake()->company(),
            'name' => fake()->name(),
            'address' => fake()->address(),
            'telephone' => fake()->phoneNumber(),
            'cellphone' => fake()->phoneNumber(),
            'email' => fake()->safeEmail(),
            'remarks' => '備考',
            'personincharge_id' => fake()->numberBetween(1,5)
        ];
    }
}
