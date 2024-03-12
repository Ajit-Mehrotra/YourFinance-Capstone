<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CreditCards>
 */
class CreditCardsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'card_name' => fake()->colorName(),
            'card_type' => fake()->creditCardType(),
            'number' => fake()->randomFloat(2, 0, 1000000000),
            'credit_limit' => fake()->randomFloat(2, 0, 1000000000), 
            'benefits' => fake()->text(), 
        ];
    }
}