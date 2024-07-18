<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WofbiStudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 200),
            'wofbi_id' => $this->faker->numberBetween(1, 4),
            'firstname' => $this->faker->firstName,
            'surname' => $this->faker->lastName,
            'location' => $this->faker->city,
            'phone' => $this->faker->phoneNumber,
            'marital' => $this->faker->randomElement(['single', 'married']),
            'occupation' => $this->faker->jobTitle,
            'address' => $this->faker->address,
            'bus_stop' => $this->faker->locale,
            'born_again' => $this->faker->boolean,
            'prayer_point' => $this->faker->sentence(12),
            'email' => $this->faker->unique()->safeEmail,
            'born_again_on' => now(),
        ];
    }
}