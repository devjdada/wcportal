<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WofbiCourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code' => $this->faker->title,
            'books' => $this->faker->sentence(12),
            'title' => $this->faker->sentence(12),
            'about' => $this->faker->sentence(200),
            'tier' => $this->faker->randomElement(['LCC', 'LDC', 'JBC', 'BCC']),
            'handout' => $this->faker->sentence(2000)
        ];
    }
}