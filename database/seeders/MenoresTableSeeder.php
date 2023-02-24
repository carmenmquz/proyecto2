<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Tutor;
use App\Models\Cuidador;
use App\Models\Menor;

class MenoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        self::seedMenores();
        $this->command->alert('Tabla menores');
    }
    private function seedMenores()
    {
        Menor::truncate();

        Menor::create([
            'name' => 'Lucia',
            'edad' => 4,
            'detalles' => 'Puede poner su hogar para el servicio',
            'tutor_id' => Tutor::all()->random()->id,
        ]);
        Menor::create([
            'name' => 'Alberto',
            'edad' => 2,
            'detalles' => 'No puede poner su hogar para el servicio',
            'tutor_id' => Tutor::all()->random()->id,
        ]);
        Menor::create([
            'name' => 'María',
            'edad' => 11,
            'detalles' => 'Puede poner su hogar para el servicio',
            'tutor_id' => Tutor::all()->random()->id,
        ]);

        $menores = Menor::factory()->count(5)
        ->has(Cuidador::factory()->count(2))
        ->create();

    }
}
