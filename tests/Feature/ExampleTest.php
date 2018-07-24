<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

<<<<<<< HEAD
        $response->assertStatus(302);
=======
        $response->assertStatus(200);
>>>>>>> 858eacacc407897566ea1558eb07b077dcf5fc0e
    }
}
