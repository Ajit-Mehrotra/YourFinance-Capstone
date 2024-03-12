<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Debts>
 */
class DebtsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'debt_name' => fake()->colorName(),
            'principle' => fake()->randomFloat(2, 0, 1000000000),
            'balance' => fake()->randomFloat(2, 0, 1000000000),
            'pmt_frequency' => fake()->randomElement(['Monthly', 'Bi-Weekly', 'Weekly', 'Bi-Monthly', 'Annually', 'Quarterly', 'Semi-Annually', 'One-Time']),
            'recurring_pmt_amt' => fake()->randomFloat(2, 0, 1000000000), 
            'apr_interest' => fake()->randomFloat(2, 0.0010, 0.9999), // 0.0010% to 99.99%
            'days_interest_deffered' => fake()->randomFloat(2, 0, 1000000000), //days interest is deffered
            'days_pmt_deffered' => fake()->randomFloat(2, 0, 1000000000), //days payment is deffered
            'date_received' => fake()->dateTime(),   
        ];
    }
}