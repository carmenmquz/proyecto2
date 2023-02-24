<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Cuidador;
use App\Models\Menor;

class CuidadoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        self::seedCuidadores();
        $this->command->alert('Tabla cuidadores');
    }
    private function seedCuidadores()
    {
        DB::table('cuidadores')->truncate();

        DB::table('cuidadores')->insert([
            'name' => 'Paco',
            'direccion' => 'Parque de la Rosa',
            'edad' => 23,
            'telefono' => '648159874'
        ]);
        DB::table('cuidadores')->insert([
            'name' => 'Olga',
            'direccion' => 'Calle de la Esperanza',
            'edad' => 32,
            'telefono' => '648134574'
        ]);
        DB::table('cuidadores')->insert([
            'name' => 'Miriam',
            'direccion' => 'Calle de la Tristeza',
            'edad' => 19,
            'telefono' => '648186544'
        ]);
        DB::table('cuidadores')->insert([
            'name' => 'Jorge',
            'direccion' => 'Juan Fernández, 20',
            'edad' => 22,
            'telefono' => '6481378632'
        ]);
        DB::table('cuidadores')->insert([
            'name' => 'Carmen',
            'direccion' => 'Reina Victoria, 24',
            'edad' => 29,
            'telefono' => '648174112'
        ]);
    }
}
