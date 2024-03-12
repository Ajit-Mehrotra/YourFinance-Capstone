<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LiquidAccounts>
 */
class LiquidAccountsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'bank_name' => fake()->company(),
            'account_type' => fake()->randomElement(['savings', 'high-yield', 'checking']),
            'account_number' => fake()->unique()->iban(840),// country code for USA is 084
            'balance' => fake()->randomFloat(2, 0, 1000000000),
        ];
    }
}