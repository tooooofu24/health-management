<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AnswerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'wakeup_time' => $this->faker->dateTime(),
            'bed_time' => $this->faker->dateTime(),
            'night_temp' => $this->faker->numberBetween(35, 37),
            'morning_temp' => $this->faker->numberBetween(35, 37),
            'q1' => $this->faker->boolean(),
            'q2' => $this->faker->boolean(),
            'q3' => $this->faker->boolean(),
            'q4' => $this->faker->boolean(),
            'q5' => $this->faker->boolean(),
            'comment' => $this->faker->boolean(20) ? $this->faker->realText(10) : null,
        ];
    }
}
