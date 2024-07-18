<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StaffFactory extends Factory
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
            'spouse_id' => $this->faker->numberBetween(1, 200),
            'station_id'  => $this->faker->numberBetween(1, 20),
            'spouse_name' => $this->faker->name,
            'spouse_email' => $this->faker->email,
            'location' => $this->faker->locale,
            'spouse_phone' => $this->faker->phoneNumber,
            'spouse_occupation' => $this->faker->jobTitle,
            'number_children' => $this->faker->numberBetween(1, 6),
        ];
    }
}
