<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TestRegister extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {

        $this->visit('/admin/admin-action-register')
            ->type('name', 'name')
            ->type('britov333@example.com', 'email')
            ->type('11223344', 'password')
            ->type('11223344', 'password_confirmation')
            ->press('Register')
            ->seePageIs('/admin/admin-action-register');

        //$response = $this->get('/');

       // $response->assertStatus(302);
    }
}
