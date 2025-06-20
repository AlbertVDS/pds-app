<?php

namespace Tests\Feature\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApiEndPointTest extends TestCase
{
    public function test_food_endpoint_shows_json(): void
    {
        $response = $this->get('/api/food');
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

    public function test_single_food_endpoint_shows_json(): void
    {
        $response = $this->get('/api/food/1');
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
        $response->assertStatus(200);
    }

    public function test_recipe_endpoint_shows_json(): void
    {
        $response = $this->get('/api/recipe');
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

    public function test_single_recipe_endpoint_shows_json(): void
    {
        $response = $this->get('/api/recipe/1');
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
}
