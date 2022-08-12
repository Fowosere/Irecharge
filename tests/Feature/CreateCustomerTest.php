<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateCustomerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_create_customer()
    {
        $response = $this->post('api/customers',[
            'first_name'=>'barry',
            'last_name'=>'gee',
            'address'=>'no 49,dubai',
   
            'phonenumber'=> '08144587389',
            'email'=> 'barryyyy@gmail.com',
        ]);

        $response->assertRedirect('/');
    }
}
