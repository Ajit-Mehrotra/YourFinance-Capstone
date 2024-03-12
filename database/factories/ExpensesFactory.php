<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Expenses>
 */
class ExpensesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'expense_name' => fake()->colorName(),
            'expense_type' => fake()->randomElement(['Rent', 'Mortgage', 'Utilities', 'Groceries', 'Car Payment', 'Insurance', 'Healthcare', 'Entertainment', 'Travel', 'Other']),
            'date_received' => fake()->dateTime(),
            'amount' => fake()->randomFloat(2, 0, 1000000000),
            'is_recurring' => fake()->boolean(),
        ];
    }
}