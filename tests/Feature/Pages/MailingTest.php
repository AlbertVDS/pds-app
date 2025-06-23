<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Mailing;
use App\Models\User;

class MailingTest extends TestCase
{
    public function test_admin_can_load_mailing_page(): void
    {
        $admin = User::where('role_id', 1)->first();

        $response = $this->actingAs($admin)->get('/mailing');

        $response->assertSee(translate('Mailings'));
        $response->assertStatus(200);
    }

    public function test_user_cannot_load_mailing_page(): void
    {
        $user = User::where('role_id', 2)->first();

        $response = $this->actingAs($user)->get('/mailing');

        $response->assertStatus(302);
        $response->assertRedirect('/');
    }

    public function test_admin_can_see_edit_mailing_page(): void
    {
        $admin = User::where('role_id', 1)->first();
        $mailing = Mailing::inRandomOrder()->first();

        $response = $this->actingAs($admin)->get('/mailing/' . $mailing->id .  '/edit');

        $response->assertSee(translate('Edit Mailing'));
        $response->assertSee($mailing->title, false);
        $response->assertSee($mailing->content, false);
        $response->assertSee('<option value="' . $mailing->mailing_group_id . '" selected', false);
        $response->assertStatus(200);
    }

    public function test_user_cannot_see_edit_mailing_page(): void
    {
        $user = User::where('role_id', 2)->first();
        $mailing = Mailing::inRandomOrder()->first();

        $response = $this->actingAs($user)->get('/mailing/' . $mailing->id .  '/edit');

        $response->assertStatus(302);
    }
}
