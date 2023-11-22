<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sale>
 */
class SaleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
            $payment = ["済", "未"];
    
            return [
                'payment_date' => fake()->dateTimeBetween('+1 week', '+2 week'),
                'payment' => Arr::random($payment),
                'transfer_date' => fake()->dateTimeBetween('+1 week', '+2 week'),
                'purchase_price' => fake()->numberBetween(300, 1000),
                'purchase_quantity' => fake()->numberBetween(1, 10),
                'purchase_totals' => fake()->numberBetween(3000, 10000),
                'sale_price' => fake()->numberBetween(1000, 1500),
                'sale_quantity' => fake()->numberBetween(1, 10),
                'sale_totals' => fake()->numberBetween(10000, 15000),
                'remark' => '備考',
            ];
    }
}
