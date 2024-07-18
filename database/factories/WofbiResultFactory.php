<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WofbiResultFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 200),
            'wofbi_id' => $this->faker->numberBetween(1, 4),
            'course_id' => $this->faker->numberBetween(1, 60),
            'student_id' => $this->faker->numberBetween(1, 30),
            'score' => $this->faker->numberBetween(50, 100),
        ];
    }
}