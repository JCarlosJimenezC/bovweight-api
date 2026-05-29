<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * Este test falla intencionalmente para demostrar branch protection.
     * GitHub bloqueará el PR si este job no pasa.
     */
    public function test_branch_protection_demo(): void
    {
        $this->assertTrue(false, 'Test fallido intencionalmente para demostrar Branch Protection Rules.');
    }
}
