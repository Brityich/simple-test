<?php

namespace Tests\Feature;

use App\Model\Admins;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TestLogin extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {

        $response = $this->post('/admin/admin-action-login', ['email' => 'britov333@gmail.com', 'password' => '12341234']);

        $response->assertLocation('/admin/home');
    }
}
