<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class TutorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user = User::factory()->create();
        $this->faker = \Faker\Factory::create('es_ES');
        return [
            'first_name' => $user->first_name,
            'last_name' => $user->last_name,
            'email' => $user->email,
            'direction' => $this->faker->streetAddress(),
            'tlf' => $this->faker->randomNumber(9, true),
            'valoration' => $this->faker->numberBetween(1, 5, true),
            'user_id' => $user->id
        ];
    }
}
