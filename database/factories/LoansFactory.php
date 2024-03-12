<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Loans>
 */
class LoansFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'loan_name' => fake()->colorName(),
            'loan_type' => fake()->randomElement(['Student Loans', 'Personal Loans', 'Auto Loans', 'Mortgage', 'Home Equity Loans', 'Payday Loans', 'Title Loans', 'Pawn Shop Loans', 'Installment Loans', 'Cash Advances']),    
        ];
    }
}