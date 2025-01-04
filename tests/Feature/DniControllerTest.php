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
        $dni = 12345678;

        $response = $this->post(route('dnistore'), [
            'dni' =>$dni,
        ]);

        $response->assertStatus(200)
                ->assertJsonStructure([
                    'dni',
                    'letter'
                ])
                ->assertJson([
                    'dni' => $dni,
                ]);
    }
    public function test_CheckIfInvalidJsonDniCalculation(){
        $dni = 'invalid_value';
        $response = $this->post(route('dnistore'), [
            'dni' => $dni,
        ]);

         $response->assertStatus(400)
         ->assertJson([
                     'error' => 'The entered number is invalid. Please enter a number between 0 and 99999999.',
                 ]);
                 
    }
    public function test_CheckIfDniNumberOutOfRange()
    {
        $dni = 100000000;

        $response = $this->post(route('dnistore'), [
            'dni' => $dni,
        ]);
        $response->assertStatus(400)
        ->assertJson([
            'error' => 'The entered number is invalid. Please enter a number between 0 and 99999999.',
        ]);
    }
}
