<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class RecipeApiService
{
    private string $baseUrl;
    private array $parameters = [];

    public function __construct()
    {
        $this->baseUrl = config('services.recipe_api.base_url');
    }

    /**
     * Search meal by name
     * @param string $search
     * @return void
     */
    public function search($search): void
    {
        $this->parameters[] = 's=' . $search;
    }


    /**
     * List all meals by first letter
     * @param string $letter
     * @return void
     */
    public function letter($letter): void
    {
        $this->parameters[] = 'f=' . $letter;
    }

    /**
     * Filter by ingredients
     * Premium API Only
     * @param array $ingredients
     * @return array
     */
    public function getByIngredients($ingredients): array
    {
        $response = Http::get($this->baseUrl . 'filter.php?i=' . implode(',', $ingredients));
        if ($response->successful()) {
            return $response->json();
        }

        return [];
    }

    /**
     * Get result
     * @return array
     */
    public function get(): array
    {
        $response = Http::get($this->baseUrl . 'search.php?' . implode('&', $this->parameters));

        if ($response->successful()) {
            return $response->json();
        }

        return [];
    }

    /**
     * Get meal by ID
     * @param string $id
     * @return array
     */
    public function getById($id): array
    {
        $response = Http::get($this->baseUrl . 'lookup.php?i=' . $id);

        if ($response->successful()) {
            return $response->json();
        }

        return [];
    }
}
