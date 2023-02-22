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
        self::seedCuidador();
        self::seedMenor();
        self::seedContratacion();

        Model::reguard();

        Schema::enableForeignKeyConstraints();
    }

    private function seedAdministrador() {
        $userAdmin = User::create([
            'first_name' => env('DB_USERNAME'),
            'last_name' => env('DB_LASTNAME'),
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
        $userTutors = User::factory(20)->create();

        $roleTutor = Role::create([
            'first_name' => 'Tutor'
        ]);

       foreach ($userTutors as $userTutor) {
        Tutor::factory(1)->create([
            'user_id' => $userTutor->id,
            'first_name' => $userTutor->first_name,
            'last_name' => $userTutor->last_name,
            'email' => $userTutor->email
        ]);
           $userTutor->roles()->attach($roleTutor->id);
        }
    }

    private function seedCuidador() {
        $userCuidadors = User::factory(15)->create();

        $roleCuidador = Role::create([
            'first_name' => 'Cuidador'
        ]);

       foreach ($userCuidadors as $userCuidador) {
           Cuidador::factory(1)->create([
               'user_id' => $userCuidador->id,
               'first_name' => $userCuidador->first_name,
               'last_name' => $userCuidador->last_name,
               'email' => $userCuidador->email
           ]);
           $userCuidador->roles()->attach($roleCuidador->id);
       }
    }

    private function seedMenor() {
         $menors = Menor::factory(30)
         ->create();
    }

    private function seedContratacion() {
        $contratacions = Contratacion::factory(8)
        ->create();
   }
}
