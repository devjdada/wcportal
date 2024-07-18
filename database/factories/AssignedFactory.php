<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AssignedFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type' => $this->faker->randomElement(['unit', 'wsf', 'user']),
            'assigned_to' => $this->faker->numberBetween(1, 200),
            'contact_id' => $this->faker->numberBetween(1, 1200),
            'station_id'  => $this->faker->numberBetween(1, 20),
        ];
    }
}