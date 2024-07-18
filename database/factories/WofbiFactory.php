<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WofbiFactory extends Factory
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
            'start' => $this->faker->randomElement(['2022-01-08', '2022-01-15', '2022-01-22', '2022-02-05', '2022-02-12', '2022-02-19', '2022-02-26']),
            'end' => $this->faker->randomElement(['2022-01-08', '2022-01-15', '2022-01-22', '2022-02-05', '2022-02-12', '2022-02-19', '2022-02-26']),
            'session' => 'October 2022',
            'tier' => $this->faker->randomElement(['BCC', 'LCC', 'LDC', 'JBC']),
        ];
    }
}