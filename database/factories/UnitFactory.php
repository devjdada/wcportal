<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class UnitFactory extends Factory
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
        'title' => $this->faker->jobTitle,
        'about' => $this->faker->paragraph,
        'email' => $this->faker->unique()->safeEmail,
    ];
    }
}
