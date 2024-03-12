<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Incomes>
 */
class IncomesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'income_name' => fake()->colorName(),
            'income_type' => fake()->randomElement(['Salary', 'Wages', 'Interest', 'Dividends', 'Capital Gains', 'Rental Income', 'Royalties', 'Annuities', 'Pensions', 'Social Security', 'Friend']),
            'date_received' => fake()->dateTime(),
            'amount' => fake()->randomFloat(2, 0, 1000000000),
            'is_recurring' => fake()->boolean(),
        ];
    }
}