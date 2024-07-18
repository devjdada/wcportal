<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'last_payment' => $this->faker->numberBetween(200000, 300000),
            'next_payment' => $this->faker->numberBetween(200000, 300000),
            'status' => $this->faker->boolean,
            'apartment_id' => $this->faker->numberBetween(1, 20),
            'last_payment_date' => $this->faker->date,
            'next_payment_date' => $this->faker->date,
            'next_payment_request' => $this->faker->date,
        ];
    }
}