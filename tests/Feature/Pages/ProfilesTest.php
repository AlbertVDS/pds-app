<?php

namespace Tests\Feature\Pages;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User\User;

class ProfilesTest extends TestCase
{
    public function test_admin_can_load_profiles_index_page(): void
    {
        $admin = User::where('role_id', 1)->first();

        $response = $this->actingAs($admin)->get('/profiles/user');

        $response->assertSee(translate('User Profiles'));
        $response->assertStatus(200);
    }

    public function test_user_cannot_load_profiles_index_page(): void
    {
        $user = User::where('role_id', 2)->first();

        $response = $this->actingAs($user)->get('/profiles/user');

        $response->assertStatus(302);
    }

    public function test_admin_can_load_profile_settings_page(): void
    {
        $admin = User::where('role_id', 1)->first();

        $response = $this->actingAs($admin)->get('profiles/user/1/edit');

        $response->assertSee(translate('User Settings'));

        $response->assertStatus(200);
    }

    public function test_user_cannot_load_profile_settings_page(): void
    {
        $user = User::where('role_id', 2)->first();

        $response = $this->actingAs($user)->get('profiles/user/1/edit');

        $response->assertStatus(302);
    }

    public function test_guest_cannot_load_favorite_recipes_page(): void
    {
        $response = $this->get('profiles/user/1/edit');

        $response->assertStatus(302);
    }
}
