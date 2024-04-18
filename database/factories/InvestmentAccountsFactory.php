<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\InvestmentAccounts>
 */
class InvestmentAccountsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'platform_name' => fake()->company(),
            'investment_type' => fake()->randomElement(['Crypto', 'ETF', 'CD', 'Money Market Funds', 'Index Funds', 'Options','Stocks', 'Bonds', 'Mutual Funds', 'Private Equity']),
            'initial_investment' => fake()->randomFloat(2, 0, 1000000000),
            'quantity' => fake()->numberBetween(1, 50),
            'current_value' => fake()->randomFloat(2, 0, 1000000000),
        ];
    }
}