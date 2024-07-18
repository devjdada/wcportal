<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProvinceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'station_id'  => $this->faker->numberBetween(1, 20),
            'title' => $this->faker->jobTitle,
            'about' => $this->faker->paragraph,
            'address' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
        ];
    }
}
