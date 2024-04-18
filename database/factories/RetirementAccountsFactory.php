<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RetirementAccounts>
 */
class RetirementAccountsFactory extends Factory
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
            'retirement_type' => fake()->randomElement(['Traditional IRA', 'Roth IRA', 'Simple IRA', 'SEP IRA', 'Solo 401(k)', 'SIMPLE 401(k)', '403(b)', '457(b)', 'Keogh', 'Defined Benefit Plan', 'Money Purchase Plan', 'Profit Sharing Plan', 'Employee Stock Ownership Plan', 'Stock Bonus Plan', 'ESOP', 'Pension Plan', 'Annuity']),
            'initial_investment' => fake()->randomFloat(2, 0, 1000000000),
            'quantity' => fake()->numberBetween(1, 50),
            'current_value' => fake()->randomFloat(2, 0, 1000000000),
        ];
    }
}