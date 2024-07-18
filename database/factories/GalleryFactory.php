<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GalleryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'published' => $this->faker->boolean,
            'title' => $this->faker->sentence(1),
            'description'  => $this->faker->sentence,
            'user_id' => $this->faker->numberBetween(1, 200),
            'station_id'  => $this->faker->numberBetween(1, 20),
        ];
    }
}