<?php

namespace Tests\Feature\Pages;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class TranslationsTest extends TestCase
{
    public function test_admin_can_load_translations_page(): void
    {
        $admin = User::where('role_id', 1)->first();

        $response = $this->actingAs($admin)->get('/translations');

        $response->assertSee(__('Translations'));
        $response->assertStatus(200);
    }

    public function test_user_cannot_load_translations_page(): void
    {
        $user = User::where('role_id', 2)->first();

        $response = $this->actingAs($user)->get('/translations');

        $response->assertStatus(302);
    }
}
