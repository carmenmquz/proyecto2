<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MenorFactory extends Factory
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
            'edad' => $this->faker->numberBetween(1, 15, true),
            'tutor_id' => $this->faker->numberBetween(1, 100, true) //¿cómo hacemos que traiga el id de tutor?
        ];
    }
}
