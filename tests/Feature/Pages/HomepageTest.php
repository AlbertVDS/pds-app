<?php

namespace Tests\Feature\Pages;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomepageTest extends TestCase
{
    public function test_homepage_loads(): void
    {
        $response = $this->get('/');

        $response->assertSee('Homepage');
        $response->assertStatus(200);
    }
}
