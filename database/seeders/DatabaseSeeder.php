<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Tutor;
use App\Models\Order;
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
        DB::table('orders')->truncate();
        DB::table('tutors')->truncate();
        DB::table('users')->truncate();
        DB::table('cuidadors')->truncate();
        DB::table('menors')->truncate();
        DB::table('roles')->truncate();

        self::seedAdministrador();
        self::seedTutor();
        self::seedCuidador();
        self::seedMenor();

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
        $userTutors = User::factory(30)
        ->has(Tutor::factory()
        ->has(Order::factory()->count(3))
        ->count(1))
        ->create();

        $roleTutor = Role::create([
            'first_name' => 'Tutor'
        ]);

       foreach ($userTutors as $userTutor) {
           $userTutor->roles()->attach($roleTutor->id);
       }
    }

    private function seedCuidador() {
        $userCuidadors = User::factory(15)
        ->has(Cuidador::factory()
        ->count(1))
        ->create();

        $roleCuidador = Role::create([
            'first_name' => 'Cuidador'
        ]);

       foreach ($userCuidadors as $userCuidador) {
           $userCuidador->roles()->attach($roleCuidador->id);
       }
    }

    private function seedMenor() {
        $userMenors = User::factory(30)
        ->has(Menor::factory()
        ->count(1))
        ->create();

        $roleMenor = Role::create([
            'first_name' => 'Menor'
        ]);

       foreach ($userMenors as $userMenor) {
           $userMenor->roles()->attach($roleMenor->id);
       }
    }
}
