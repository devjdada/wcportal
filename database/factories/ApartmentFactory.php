<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ApartmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(1),
            'address' => $this->faker->address,
            'bed' => $this->faker->numberBetween(1, 6),
            'toilet' => $this->faker->numberBetween(1, 6),
            'dinning' => $this->faker->boolean,
            'owner' => $this->faker->randomElement(['ministry', 'rented']),
            'agent' => $this->faker->sentence(8),
            'condition' => $this->faker->sentence(12),
        ];
    }
}
