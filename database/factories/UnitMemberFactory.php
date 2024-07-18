<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UnitMemberFactory extends Factory
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
            'unit_id' => $this->faker->numberBetween(1, 10),
            'station_id'  => $this->faker->numberBetween(1, 20),
        ];
    }
}