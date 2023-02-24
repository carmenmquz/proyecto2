<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
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
            'job_title' => $this->faker->word(),
            'city' => $this->faker->city(),
            'country' => $this->faker->country()
        ];
    }
}
