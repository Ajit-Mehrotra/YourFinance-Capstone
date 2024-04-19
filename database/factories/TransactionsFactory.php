<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transactions>
 */
class TransactionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'user_id' => \App\Models\User::factory(),
            'categories_id' => \App\Models\User::factory(),
            'date' => $this->faker->dateTimeBetween($startDate = 'first day of March this year', $endDate = '+2 years')->format('Y-m-d'),
            'name' => $this->faker->randomElement(['Salary', 'Rent', 'Restaurant', 'Transport', 'Entertainment', 'Health', 'Education', 'Other', 'Walmart', 'Target','Netflix', 'Hulu', 'Friend']),
            // date($format = 'Y-m-d', $max = 'now')
            'amount' => $this->faker->numberBetween(100, 5000),
            'type' => $this->faker->randomElement(['income', 'cost']),
            'status' => $this->faker->randomElement(['pending', 'completed', 'cancelled'])
        ];
    }
}