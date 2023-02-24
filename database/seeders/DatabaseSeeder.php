<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Model::unguard();
        Schema::disableForeignKeyConstraints();

        DB::table('orders')->truncate();
        DB::table('users')->truncate();
        DB::table('roles')->truncate();
        DB::table('role_user')->truncate();
        DB::table('contrataciones')->truncate();

    $this->call(UsersTableSeeder::class);
    $this->call(TutoresTableSeeder::class);
    $this->call(CuidadoresTableSeeder::class);
    $this->call(MenoresTableSeeder::class);


    Model::reguard();

    Schema::enableForeignKeyConstraints();

    $this->command->info('CREADO CORRECTAMENTE');

    }
}
