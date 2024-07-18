<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ApartmentComplainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'staff_id'  => $this->faker->numberBetween(1, 20),
            'apartment_id' => $this->faker->numberBetween(1, 20),
            'complain' => $this->faker->paragraph,
        ];
    }
}