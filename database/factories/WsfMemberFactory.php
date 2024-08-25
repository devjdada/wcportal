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
            'station_id'  => 1,
            'user_id' => $this->faker->numberBetween(1, 50),
            'homecell_id' => $this->faker->numberBetween(1, 200),

        ];
    }
}
