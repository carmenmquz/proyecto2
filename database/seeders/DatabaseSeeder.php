<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Tutor;
use App\Models\Contratacion;
use App\Models\Role;
use App\Models\Menor;
use App\Models\Cuidador;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Model::unguard();
        Schema::disableForeignKeyConstraints();

        DB::table('role_user')->truncate();
        DB::table('users')->truncate();
        DB::table('tutors')->truncate();
        DB::table('cuidadors')->truncate();
        DB::table('menors')->truncate();
        DB::table('contratacions')->truncate();
        DB::table('roles')->truncate();

        self::seedAdministrador();
        self::seedTutor();
        self::seedMenor();
        self::seedCuidador();
        self::seedContratacion();

        Model::reguard();

        Schema::enableForeignKeyConstraints();
    }

    private function seedAdministrador() {
        $userAdmin = User::create([
            'name' => env('DB_USERNAME'),
            'email' => env('DB_EMAIL'),
            'password' => bcrypt(env('DB_PASSWORD')),
            'email_verified_at' => now()
        ]);

        $roleAdmin = Role::create([
            'first_name' => 'Admin'
        ]);

        $userAdmin->roles()->attach($roleAdmin->id);

        $this->command->alert('¡Tabla users inicializada con datos!');
    }

    private function seedTutor() {
        Tutor::factory(8)->create();
        $userTutors = User::factory();

        $roleTutor = Role::create([
            'first_name' => 'Tutor'
        ]);

        foreach ($userTutors as $userTutor) {
            $userTutor->roles()->attach($roleTutor->id);
        }
    }

    private function seedCuidador() {
        Cuidador::factory(15)->create();
        $userCuidadors = User::factory();

        $roleCuidador = Role::create([
            'first_name' => 'Cuidador'
        ]);

        foreach ($userCuidadors as $userCuidador) {
            $userCuidador->roles()->attach($roleCuidador->id);
        }
    }

    private function seedMenor() {
        Menor::factory(8)->create();
    }

    private function seedContratacion() {
        Contratacion::factory(15)->create();
   }
}
