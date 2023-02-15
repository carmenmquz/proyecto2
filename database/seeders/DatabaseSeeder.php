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
        DB::table('cuidador')->truncate();
        DB::table('roles')->truncate();

        self::seedAdministrador();
        // self::seedCuidador();

        $roleTutor = Role::create([
            'first_name' => 'Tutor'
        ]);

        $userTutors = User::factory(10)
       ->has(Tutor::factory()
       ->has(Order::factory()->count(3))
       ->count(1))
       ->create();

       foreach ($userTutors as $userTutor) {
           $userTutor->roles()->attach($roleTutor->id);
       }

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

    // private function seedCuidador() {
    //     DB::table('cuidador')->insert([
    //         'dninie'=>'12345678X',
    //         'especialidad'=>'cuidarninyos'
    //     ]);
    //     DB::table('cuidador')->insert([
    //         'dninie'=>'98765432Y',
    //         'especialidad'=>'ensenyarninyos'
    //     ]);
    //     DB::table('cuidador')->insert([
    //         'dninie'=>'21894367Z',
    //         'especialidad'=>'tratarninyos'
    //     ]);
    //     $this->command->alert('¡Tabla cuidador inicializada con datos!');
    // }
}
