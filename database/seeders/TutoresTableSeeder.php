<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Tutor;
use App\Models\User;
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

        $roleTutor = Role::create([
            'name' => 'Tutor'
        ]);

        User::factory(10)
        ->has(Tutor::factory())
        // ->has(Order::factory()->count(3))
        ->create();

        $userTutores = User::where('id', '!=' , 1)->get();

        foreach ($userTutores as $userTutor) {
            $userTutor->roles()->attach($roleTutor->id);
        }
    }
}
