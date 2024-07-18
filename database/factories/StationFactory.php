<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'phone' => $this->faker->phoneNumber,
            'location' => $this->faker->locale,
            'email'  => $this->faker->unique()->safeEmail,
            'about' => $this->faker->sentence(20),
            'address' => $this->faker->address,
            'capacity'  => $this->faker->numberBetween(200, 5000),
            'average_attendance'  => $this->faker->numberBetween(200, 5000),
            'average_income'  => $this->faker->numberBetween(100000, 50000000),
            'long'  => $this->faker->longitude,
            'lat'=> $this->faker->latitude,

        ];
    }
}
