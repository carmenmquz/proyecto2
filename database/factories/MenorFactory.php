<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Tutor;

class MenorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'edad' => $this->faker->numberBetween(1, 17),
            'detalles' => $this->faker->word(),
            'tutor_id' => Tutor::all()->random()->id,
        ];
    }
}
