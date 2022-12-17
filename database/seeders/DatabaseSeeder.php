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
        self::seedUsers();
        $this->command->alert('¡Tabla users inicializada con datos!');
        self::seedCuidador();
        $this->command->alert('¡Tabla cuidador inicializada con datos!');
    }
    private function seedUsers() {
        DB::table('users')->truncate();
        DB::table('users')->insert([
            'id'=>'1',
            'dninie'=>'24422082S',
            'name'=>'admin',
            'email'=>'proyectoandromeda@gmail.com',
            'password'=>bcrypt('123456JJc'),
            'tlf'=>'601228624',
            'imagen'=>'https://www.cartagena.es/gestion/images/0/158401.jpg'
        ]);
    }

    private function seedCuidador() {
        DB::table('cuidador')->truncate();
        DB::table('cuidador')->insert([
            'id'=>'1',
            'dninie'=>'12345678X',
            'especialidad'=>'cuidarninyos'
        ]);
        DB::table('cuidador')->insert([
            'id'=>'2',
            'dninie'=>'98765432Y',
            'especialidad'=>'ensenyarninyos'
        ]);
        DB::table('cuidador')->insert([
            'id'=>'3',
            'dninie'=>'21894367Z',
            'especialidad'=>'tratarninyos'
        ]);
    }
}
