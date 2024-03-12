<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subscriptions>
 */
class SubscriptionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'subscription_name' => fake()->company(),
            'subscription_recurrence' => fake()->randomElement(['Daily', 'Weekly', 'Monthly', 'Bi-monthly','Quarterly','Bi-yearly','Yearly']),
            'recurring_cost' => fake()->randomFloat(2, 0, 1000000000),
            'start_date' => fake()->date(),
            'end_date' => fake()->date(),
            
        ];
    }
}