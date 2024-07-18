<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WsfMemberFactory extends Factory
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
            'user_id' => $this->faker->numberBetween(1, 200),
            'homecell_id' => $this->faker->numberBetween(1, 200),

        ];
    }
}