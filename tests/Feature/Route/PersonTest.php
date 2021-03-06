<?php

namespace Tests\Feature\Route;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PersonTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testPersionList()
    {
        //$this->assertTrue(true);
        $response = $this->json('GET', 'api/person');
        $response->assertStatus(200);
    }


    public function testPersionStore()
    {
        $response = $this->json('GET', 'api/person',
            ['name' => 'Johny', 'weight' => '60', 'height' => '1.72']);
        $response->assertStatus(200);
    }

    public function testPersonView()
    {
        $response = $this->json('GET', 'api/person/1');
        $response->assertStatus(200);
    }

    public function testPersonUpdate()
    {
        $response = $this->json('PUT', 'api/person/1', ['name' => 'Johny']);
        $response->assertStatus(200);
    }

    public function testPersonDelete()
    {
        $response = $this->json('DELETE', 'api/person/1');
        $response->assertStatus(200);
    }
}
