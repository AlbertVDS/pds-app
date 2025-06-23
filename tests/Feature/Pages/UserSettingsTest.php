<?php

namespace Tests\Feature\Pages;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User\User;

class UserSettingsTest extends TestCase
{
    public function test_user_can_load_user_settings_page(): void
    {
        $user = User::where('role_id', 2)->first();

        $response = $this->actingAs($user)->get('/user/settings');

        $response->assertSee(translate('User Settings'));

        $response->assertStatus(200);
    }

    public function test_guest_cannot_load_favorite_recipes_page(): void
    {
        $response = $this->get('/user/settings');

        $response->assertStatus(302);
    }
}
