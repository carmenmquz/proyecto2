<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TutorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $this->faker = \Faker\Factory::create('es_ES');
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'direction' => $this->faker->streetAddress(),
            'email' => $this->faker->email(),
            'tlf' => $this->faker->randomNumber(9, true),
            'valoration' => $this->faker->numberBetween(1, 5, true)
        ];
    }
}