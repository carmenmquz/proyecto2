<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        self::seedAdministrador();
        $this->command->alert('¡Tabla users inicializada con datos!');
        self::seedCuidador();
        $this->command->alert('¡Tabla cuidador inicializada con datos!');
    }
    private function seedAdministrador() {
        DB::table('users')->truncate();
        DB::table('users')->insert([
            'name'=>env('DB_USERNAME'),
            'email'=>env('DB_EMAIL'),
            'password'=>bcrypt(env('DB_PASSWORD'))
        ]);
    }

    private function seedCuidador() {
        DB::table('cuidador')->truncate();
        DB::table('cuidador')->insert([
            'dninie'=>'12345678X',
            'especialidad'=>'cuidarninyos'
        ]);
        DB::table('cuidador')->insert([
            'dninie'=>'98765432Y',
            'especialidad'=>'ensenyarninyos'
        ]);
        DB::table('cuidador')->insert([
            'dninie'=>'21894367Z',
            'especialidad'=>'tratarninyos'
        ]);
    }
}
