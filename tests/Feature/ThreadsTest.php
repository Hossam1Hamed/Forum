<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class ThreadsTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic test example.
     */
    public function a_user_can_browse_threads(): void
    {
        $response = $this->get('threads');

        $response->assertStatus(200);
    }
}
