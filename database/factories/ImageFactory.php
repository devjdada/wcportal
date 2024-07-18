<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(1),
            'image'  => $this->faker->imageUrl,
            'icon' => $this->faker->imageUrl,
            'thumbnail' => $this->faker->imageUrl,
            'user_id' => $this->faker->numberBetween(1, 200),
            'gallery_id' => $this->faker->numberBetween(1, 5),
            'station_id'  => $this->faker->numberBetween(1, 20),
        ];
    }
}
