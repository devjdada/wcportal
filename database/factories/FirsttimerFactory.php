<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FirsttimerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'firstname' => $this->faker->firstName,
            'surname' => $this->faker->lastName,
            'location' => $this->faker->city,
            'invitted_by' => $this->faker->numberBetween(1, 40),
            'post_by' => $this->faker->numberBetween(1, 30),
            'phone' => $this->faker->phoneNumber,
            'marital' => $this->faker->randomElement(['single', 'married']),
            'type' => $this->faker->randomElement(['soul', 'ft', 'nc']),
            'ocupation' => $this->faker->jobTitle,
            'address' => $this->faker->address,
            'bus_stop' => $this->faker->locale,
            'born_again' => $this->faker->boolean,
            'exblish' => $this->faker->boolean,
            'wb' => $this->faker->boolean,
            'fc' => $this->faker->boolean,
            'prayer_point' => $this->faker->sentence(12),
            'email' => $this->faker->unique()->safeEmail,
            'born_again_on' => now(),
            'station_id'  => 1,
        ];
    }
}
