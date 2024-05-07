<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Dresses;
use Illuminate\Database\Eloquent\Factories\Factory;

class DressesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Dresses::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
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

    /**
     * Indicate that the dress belongs to a category.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function withCategory()
    {
        return $this->afterCreating(function (Dresses $dresses) {
            $category = Category::factory()->create();
            $dresses->category_id = $category->id;
            $dresses->save();
        });
    }
}

