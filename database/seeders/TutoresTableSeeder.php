<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Tutor;
use App\Models\User;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Role;

class TutoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        self::seedTutores();
        $this->command->alert('Tabla tutores');
    }

    private function seedTutores()
    {
        Tutor::truncate();

        Tutor::create([
            'name' => 'Arturo',
            'email' => 'arturitoc3po@gmail.com',
            'imagen' => 'https://cdn.zendalibros.com/wp-content/uploads/2016/03/Arturo-P%C3%A9rez-Reverte_avatar-500x500.jpg',
            'pais' => 'España',
            'ciudad' => 'La Unión',
            'sexo' => 'Hombre',
            'telefono' => 978123456
        ]);

        $roleCustomer = Role::create([
            'name' => 'Customer'
        ]);

        Tutor::factory(10)
        ->has(
            User::factory()->count(4)
            ->has(Customer::factory()
            ->has(Order::factory()->count(3))
            ->count(2))
        )
        ->create();

        $userCustomers = User::where('id', '!=' , 1)->get();

        foreach ($userCustomers as $userCustomer) {
            $userCustomer->roles()->attach($roleCustomer->id);
        }
    }
}
