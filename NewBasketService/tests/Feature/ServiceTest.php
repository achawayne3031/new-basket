<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ServiceTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->post('/api/users', [
            'first_name' => 'Amy',
            'last_name' => 'wayne',
            'email' => 'acheawayne@gmail.com',
        ]);

        $response->assertStatus(200);
    }
}
