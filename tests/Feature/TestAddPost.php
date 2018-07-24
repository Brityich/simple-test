<?php

namespace Tests\Feature;

use App\Model\Admins;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Support\Facades\Auth;

class TestAddPost extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {

        $user = factory(Admins::class)->create();
        $response = $this->actingAs($user, 'admin')
            ->post('admin/addpost/', ['title' => 'Test title', 'description' => 'Test description', 'category' => 'Animals']);

        $response->assertRedirect('admin/addpost/');
    }
}
