<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Model\User;

class AddCommentTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user, 'web')
            ->post('/send-comment', ['comment-text' => 'Test comment']);

        $response->assertStatus(302);
    }
}
