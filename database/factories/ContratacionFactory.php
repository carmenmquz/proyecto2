<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Tutor;
use App\Models\Cuidador;
use App\Models\Menor;

class ContratacionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $fechainicio = $this->faker->dateTimeBetween('2023-01-01', 'now');
        $fechafin = clone $fechainicio;
        $randomHours = $this->faker->numberBetween(1, 9);
        $fechafin->modify("+$randomHours hours");
        return [
            'tutor_id' => Tutor::all()->random()->id,
            'cuidador_id' => Cuidador::all()->random()->id,
            'menor_id' => Menor::all()->random()->id,
            'fechainicio' => $fechainicio,
            'fechafin' => $fechafin,
            'pago' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 7, $max = 50),
        ];
    }
}
