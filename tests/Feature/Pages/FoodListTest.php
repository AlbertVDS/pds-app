<?php

namespace Tests\Feature\Pages;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User\User;

class FoodListTest extends TestCase
{
    public function test_food_list_page_loads(): void
    {
        $response = $this->get('/foods');

        $response->assertSee(translate('Food list'));
        $response->assertDontSee('No foods found');
        $response->assertStatus(200);
    }

    public function test_food_list_admin_can_see_admin_gui_parts(): void
    {
        $admin = User::where('role_id', 1)->first();

        $response = $this->actingAs($admin)->get('/foods');

        $response->assertSee(translate('Add Food'));
        $response->assertSee('class="fa-solid fa-pencil"', false);
        $response->assertSee('class="fa-solid fa-trash"', false);
        $response->assertStatus(200);
    }

    public function test_food_list_user_cannot_see_admin_gui_parts(): void
    {
        $user = User::where('role_id', 2)->first();

        $response = $this->actingAs($user)->get('/foods');

        $response->assertDontSee(translate('Add Food'));
        $response->assertDontSee('class="fa-solid fa-pencil"', false);
        $response->assertDontSee('class="fa-solid fa-trash"', false);
        $response->assertStatus(200);
    }
}
