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
            'student_id' => $this->faker->numberBetween(1, 269),
            'date' => $this->faker->dateTimeBetween('-3 days', 'now'),
            'wakeup_time' => $this->faker->dateTime(),
            'bed_time' => $this->faker->dateTime(),
            'night_temp' => $this->faker->randomFloat(null, 35, 37),
            'morning_temp' => $this->faker->randomFloat(null, 35, 37),
            'q1' => $this->faker->boolean(10),
            'q2' => $this->faker->boolean(10),
            'q3' => $this->faker->boolean(10),
            'q4' => $this->faker->boolean(10),
            'q5' => $this->faker->boolean(10),
            'comment' => $this->faker->boolean(20) ? $this->faker->realText(10) : null,
        ];
    }
}
