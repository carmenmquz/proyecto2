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
        $fecha_inicio = $this->faker->dateTimeBetween('2023-01-01', 'now');
        $fecha_fin = clone $fecha_inicio;
        $randomHours = $this->faker->numberBetween(1, 9);
        $fecha_fin->modify("+$randomHours hours");
        return [
            'tutor_id' => $tutor->id,
            'cuidador_id' => Cuidador::factory()->create(),
            'menor_id' => Menor::factory()->create(['tutor_id' => $tutor->id]),
            'fecha_inicio' => $fecha_inicio,
            'fecha_fin' => $fecha_fin,
            'pago' => $this->faker->randomFloat(2, 7, 50),
        ];
    }
}
