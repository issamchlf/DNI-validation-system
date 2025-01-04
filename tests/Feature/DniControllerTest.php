<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DniControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_CheckIfValidJsonDniCalculation()
    {
        $response = $this->post(route('dnistore'), [
            
        ]);

        $response->assertStatus(200);
    }
}
