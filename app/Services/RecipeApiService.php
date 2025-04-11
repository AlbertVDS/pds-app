<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class RecipeApiService
{
    private string $baseUrl = 'https://www.themealdb.com/api/json/v1/1/';
    private array $parameters = [];

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
     * @return void
     */
    public function filterByIngredients($ingredients): void
    {
        $this->parameters[] = implode(',', $ingredients);
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
