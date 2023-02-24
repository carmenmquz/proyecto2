<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CuidadorFactory extends Factory
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
            'name' => $this->faker->name(),
            'direccion' => $this->faker->streetAddress(),
            'edad' => $this->faker->numberBetween(20, 40),
            'telefono' => $this->faker->phoneNumber(),
        ];
    }
}
