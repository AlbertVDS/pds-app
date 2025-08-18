<?php

namespace Tests\Feature\Api;

use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User\User;

class ApiEndPointTest extends TestCase
{
    private $admin;
    private $token;

    public function setUp(): void
    {
        parent::setUp();
        $this->admin = User::where('role_id', 1)->first();
        $this->token = $this->admin->createToken('api')->plainTextToken;
    }

    public function test_food_endpoint_shows_json_with_authentication(): void
    {
        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $this->token,
        ])->getJson('/api/foods');
        $response->assertJsonStructure([
            'data' => [
                '*' => [
                    "id",
                    "name",
                    "type",
                    "level",
                    "weight",
                    "fructose",
                    "lactose",
                    "mannitol",
                    "sorbitol",
                    "GOS",
                    "fructan",
                ],
            ],
        ]);
        $response->assertStatus(200);
    }

    public function test_food_endpoint_not_shown_without_authentication(): void
    {
        $response = $this->getJson('/api/foods');

        $response->assertJson([
            'message' => 'Unauthenticated.',
        ]);
        $response->assertStatus(401);
    }

    public function test_single_food_endpoint_shows_json_with_authentication(): void
    {
        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $this->token,
        ])->getJson('/api/foods/1');

        $response->assertJsonStructure([
            'data' => [
                'id',
                "name",
                "type",
                "level",
                "weight",
                "fructose",
                "lactose",
                "mannitol",
                "sorbitol",
                "GOS",
                "fructan",
                "substitutes" => [
                    '*' => [
                        "id",
                        "name",
                        "type",
                        "level",
                        "weight",
                        "fructose",
                        "lactose",
                        "mannitol",
                        "sorbitol",
                        "GOS",
                        "fructan",
                    ],
                ],
            ],
        ]);
        $response->assertJson([
            'data' => [
                // Optional: add expected structure inside 'data'
            ],
        ]);
        $response->assertStatus(200);
    }

    public function test_single_food_endpoint_not_shown_without_authentication(): void
    {
        $response = $this->getJson('/api/foods/1');

        $response->assertJson([
            'message' => 'Unauthenticated.',
        ]);
        $response->assertStatus(401);
    }

    public function test_recipe_endpoint_shows_json_with_authentication(): void
    {
        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $this->token,
        ])->getJson('/api/recipes');
        $response->assertJsonStructure([
            'data' => [
                '*' => [
                    "id",
                    "name",
                    "category",
                    "area",
                    "thumbnail_url",
                    "tags"
                ],
            ],
        ]);
        $response->assertStatus(200);
    }

    public function test_recipe_endpoint_not_shown_without_authentication(): void
    {
        $response = $this->getJson('/api/recipes');

        $response->assertJson([
            'message' => 'Unauthenticated.',
        ]);
        $response->assertStatus(401);
    }

    public function test_single_recipe_endpoint_shows_json_with_authentication(): void
    {
        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $this->token,
        ])->getJson('/api/recipes/1');
        $response->assertJsonStructure([
            'data' => [
                'id',
                'name',
                'category',
                'area',
                'instructions',
                'thumbnail_url',
                'tags',
                'youtube_url',
                'ingredients' => [
                    '*' => [
                        "name",
                        "measurement",
                    ],
                ],
            ],
        ]);
        $response->assertStatus(200);
    }

    public function test_single_recipe_endpoint_not_shown_without_authentication(): void
    {
        $response = $this->getJson('/api/recipes/1');

        $response->assertJson([
            'message' => 'Unauthenticated.',
        ]);
        $response->assertStatus(401);
    }
}
