<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EvenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
              'start' => $this->faker->date(),
              'end' => $this->faker->date()
        ];
    }
}