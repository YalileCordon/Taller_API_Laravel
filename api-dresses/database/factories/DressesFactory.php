<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dresses>
 */
class DressesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'size' => $this->faker->randomElement(['Small', 'Medium', 'Large']),
            'color' => $this->faker->colorName,
            'material' => $this->faker->randomElement(['Cotton', 'Wool', 'Polyester']),
            'gender' => $this->faker->randomElement(['Male', 'Female', 'Unisex']),
            'origin' => $this->faker->country,
            'description' => $this->faker->text,
            'price' => $this->faker->randomFloat(2, 10, 100),
            'quantity' => $this->faker->numberBetween(1, 50),
            'designer' => $this->faker->name,
            'status' => $this->faker->boolean(100), 
            'manufacturing_date' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
