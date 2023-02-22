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
        $tutor = Tutor::factory()->create();
        $fechainicio = $this->faker->dateTimeBetween('2023-01-01', 'now');
        $fechafin = clone $fechainicio;
        $randomHours = $this->faker->numberBetween(1, 9);
        $fechafin->modify("+$randomHours hours");
        return [
            'tutor_id' => $tutor->id,
            'cuidador_id' => Cuidador::factory()->create(),
            'menor_id' => Menor::factory()->create(['tutor_id' => $tutor->id]),
            'fechainicio' => $fechainicio,
            'fechafin' => $fechafin,
            'pago' => $this->faker->randomFloat(2, 7, 50),
        ];
    }
}
