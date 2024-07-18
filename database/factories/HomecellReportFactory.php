<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HomecellReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // "homecell_id", "user_id", "male", "female", "children", "total", "week"
        return [
            'station_id'  => $this->faker->numberBetween(1, 20),
            'homecell_id' => $this->faker->numberBetween(1, 700),
            'user_id' => $this->faker->numberBetween(1, 200),
            'male' => $this->faker->numberBetween(1, 7),
            'female' => $this->faker->numberBetween(1, 9),
            'new_convert' => $this->faker->numberBetween(1, 4),
            'first_timer' => $this->faker->numberBetween(1, 3),
            'children' => $this->faker->numberBetween(1, 13),
            'week' => $this->faker->dateTimeBetween('2024-07-13', '2024-07-15'),
            'total' => $this->faker->numberBetween(20),
        ];
    }
}
