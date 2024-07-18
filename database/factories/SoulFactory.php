<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class SoulFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'station_id'  => 1,
            'firstname' => $this->faker->firstName,
            'surname' => $this->faker->lastName,
            'location' => $this->faker->city,
            'soul_winner' => $this->faker->numberBetween(1, 200),
            'phone' => $this->faker->phoneNumber,
            'marital' => $this->faker->randomElement(['single', 'married']),
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
            'created_at' => '2024-07-11 16:06:06',
        ];
    }
}
