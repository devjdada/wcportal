<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AreaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->jobTitle,
            'about' => $this->faker->paragraph,
            'address' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
            'station_id'  => $this->faker->numberBetween(1, 20),

        ];
    }
}