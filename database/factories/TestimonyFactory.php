<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TestimonyFactory extends Factory
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
            'user_id' => $this->faker->numberBetween(1, 50),

            'title' => $this->faker->title,
            'image' => $this->faker->imageUrl(),
            'name' => $this->faker->name(),
            'email' => $this->faker->email(),
            'phone' => $this->faker->phoneNumber(),

            'testimony' => $this->faker->paragraph,

            'status' => $this->faker->boolean(),

            'poster_id' => $this->faker->numberBetween(1, 20),
        ];
    }
}
