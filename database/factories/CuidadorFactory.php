<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CuidadorFactory extends Factory
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
            'first_name' => $user->name,
            'last_name' => $this->faker->lastName(),
            'email' => $user->email,
            'direction' => $this->faker->streetAddress(),
            'tlf' => $this->faker->randomNumber(9, true),
            'tarifa' => $this->faker->randomFloat(2, 7, 20),
            'valoration' => $this->faker->numberBetween(1, 5, true),
            'user_id' => $user->id,
        ];
    }
}
