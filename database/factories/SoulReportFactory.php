<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SoulReportFactory extends Factory
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
            'soul_id' => $this->faker->numberBetween(1, 1200),
            'report' => $this->faker->paragraph,
            'prayer' => $this->faker->paragraph,
            'homecell' => $this->faker->boolean,
            'baptised' => $this->faker->boolean,
            'unit' => $this->faker->boolean,
            'last_service' => $this->faker->boolean,
            'foundation_class' => $this->faker->boolean,
            'exblish' => $this->faker->boolean,
            'born_again' => $this->faker->boolean,
        ];
    }
}