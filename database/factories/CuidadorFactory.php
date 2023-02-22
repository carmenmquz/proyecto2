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
            'direction' => $this->faker->streetAddress(),
            'tlf' => $this->faker->randomNumber(9, true),
            'tipo' => 'Particular',
            'tarifa' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 7, $max = 20),
            'valoration' => $this->faker->numberBetween(1, 5, true)
        ];
    }
}
