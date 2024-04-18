<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MiscAssets>
 */
class MiscAssetsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'misc_asset_name' => fake()->colorName(),
            'misc_asset_type' => fake()->randomElement(['Business', 'HSA', 'Intellectual Property', 'Other']),
            'initial_investment' => fake()->randomFloat(2, 0, 1000000000),
            'quantity' => fake()->numberBetween(1, 50),
            'current_value' => fake()->randomFloat(2, 0, 1000000000),
        ];
    }
}