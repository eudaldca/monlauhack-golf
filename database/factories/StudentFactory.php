<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->name(),
            'last_name' => $this->faker->lastName(),
            'course' => Arr::random(['1DAM', '2DAM', '1ASIX', '2ASIX', '1DAW', '2DAW', '1ESO', '2ESO', '3ESO', '4ESO', '1BAT', '2BAT']),
            'average_mark' => (rand(0, 1000) / 100),
            'enrollment_date' => $this->faker->date(),
            'birth_date' => $this->faker->date(),
        ];
    }


}
