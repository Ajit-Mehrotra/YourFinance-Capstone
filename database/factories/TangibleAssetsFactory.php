<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TangibleAssets>
 */
class TangibleAssetsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tangible_name' => fake()->colorName(),
            'tangible_type' => fake()->randomElement(['Real Estate', 'Vehicles', 'Art', 'Jewelry', 'Collectibles', 'Precious Metals', 'Furniture', 'Electronics', 'Appliances', 'Other']),
            'initial_investment' => fake()->randomFloat(2, 0, 1000000000),
            'quantity' => fake()->numberBetween(1, 50),
            'current_value' => fake()->randomFloat(2, 0, 1000000000),
        ];
    }
}