<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class UserControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_returns_a_list_of_users()
    {
        User::factory()->count(3)->create();

        $response = $this->getJson('/api/users');

        $response->assertStatus(200)
                 ->assertJsonCount(3);
    }

    /** @test */
    public function it_creates_a_new_user()
    {
        // Datos del nuevo usuario (con password plano, como lo enviaría un cliente)
        $data = [
            'name' => 'Juan Pérez',
            'email' => 'juan@example.com',
            'password' => 'secret123'
        ];

        // Hacemos la petición POST
        $response = $this->postJson('/api/users', $data);

        // Verificamos que se creó correctamente
        $response->assertStatus(201);

        $this->assertDatabaseHas('users', [
            'name' => 'Juan Pérez',
            'email' => 'juan@example.com'
        ]);
    }
}
