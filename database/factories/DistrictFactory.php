<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DistrictFactory extends Factory
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
            'phone' => $this->faker->phoneNumber,
            'province_id' => $this->faker->numberBetween(1, 20),
            'address' => $this->faker->address,
            'about' => $this->faker->paragraph,
            'station_id'  => $this->faker->numberBetween(1, 20),
        ];
    }
}
