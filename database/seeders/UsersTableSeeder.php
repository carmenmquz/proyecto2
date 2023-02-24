<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Customer;
use App\Models\User;
use App\Models\Order;
use App\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        self::seedUsers();
        $this->command->alert('Tabla users');
    }
    private function seedUsers() {

        $userAdmin = User::create([
            'name' => env('DB_USERNAME'),
            'email' => env('DB_EMAIL'),
            'password' => bcrypt(env('DB_PASSWORD')),
            'email_verified_at' => now()
        ]);

        $roleAdmin = Role::create([
            'name' => 'Admin'
        ]);

        $userAdmin->roles()->attach($roleAdmin->id);

    }
}
