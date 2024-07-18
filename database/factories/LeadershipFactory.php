<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LeadershipFactory extends Factory
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
            'role' => $this->faker->jobTitle,
            'position' => $this->faker->jobTitle,
            'office' =>  $this->faker->randomElement(['statutory', 'unit', 'homecell', 'district', 'province']),
            'active' => $this->faker->boolean,
            'user_id' => $this->faker->numberBetween(1, 30),
            'office_id' => $this->faker->numberBetween(1, 10),
            'start' => $this->faker->date(),
            'end' => $this->faker->date(),
        ];
    }
}
