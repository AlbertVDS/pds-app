<?php

namespace Tests\Feature\Pages;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Recipe\Recipe;

class RecipesTest extends TestCase
{
    public function test_recipes_page_loads(): void
    {
        $response = $this->get('/recipes');

        $response->assertSee('Recipes');
        $response->assertDontSee(translate('No recipes found'));
        $response->assertStatus(200);
    }

    public function test_recipe_search_shows_results(): void
    {
        $response = $this->post('/recipes', [
            'search' => 'pasta'
        ]);

        $response->assertSee(translate('Pasta'));
        $response->assertStatus(200);
    }

    public function test_recipe_details_page_loads(): void
    {
        $recipe = Recipe::inRandomOrder()->first();
        $response = $this->get('/recipes/' . $recipe->id);

        $response->assertSee($recipe->name, false);
        $response->assertStatus(200);
    }
}
