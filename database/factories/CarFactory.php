<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type' => $this->faker->word(2),
            'model' => $this->faker->word(),
            'year' => $this->faker->year,
            'price' => $this->faker->numberBetween(10000, 100000),
            'color' => $this->faker->colorName,
            'category_id' => $this->faker->numberBetween(1, 10)
        ];
    }
}
