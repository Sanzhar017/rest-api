<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('api/users');

        $response->assertOk();
    }
    public function test_user_show()
    {
        $response = $this->get('api/users/5');

        $response->assertOk();
        $response->assertJsonPath("name","Kelli Dickinson");
    }
}
