<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(8),
            'slug' => $this->faker->slug(),
            'content' => $this->faker->sentence(400),
            'image' => $this->faker->imageUrl(),
            'status' => 'active',
            'station_id'  => $this->faker->numberBetween(1, 20),
            'user_id' => $this->faker->numberBetween(1, 200),
            'poster_id' => $this->faker->numberBetween(1, 200),
            'dated' => $this->faker->dateTime,
            'edit_by' => $this->faker->numberBetween(1, 200),
            'summary' => $this->faker->sentence(18),
            'views' => $this->faker->numberBetween(1, 600),
            'category' => $this->faker->randomElement(['single', 'married', 'faith', 'healing', 'holy spirit', 'praise']),
            'tags' => $this->faker->randomElement(['single', 'married', 'faith', 'healing', 'holy spirit', 'praise']),
            'published_date' => $this->faker->dateTime,
            'published' => $this->faker->boolean,
        ];
    }
}
