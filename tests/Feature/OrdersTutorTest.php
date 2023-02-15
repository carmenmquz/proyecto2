<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use Laravel\Sanctum\Sanctum;


class OrdersTutorTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_OrdersTutor()
    {
        $users = User::factory(2)
           ->has(Tutor::factory()
               ->has(Order::factory()->count(3))
               ->count(1))
           ->create();
       Sanctum::actingAs($users[1]);
       $response = $this->get('/api/orders');

       //$response->dumpHeaders();

       //$response->dump();

       $response->assertStatus(200)
           ->assertJsonStructure(['data' => ['*' => ['id', 'attributes' => ['id', 'tutor_id', 'amount']]]])
           ->assertJsonCount(3, 'data');

    }
}
