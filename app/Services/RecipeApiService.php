<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class RecipeApiService
{
    private string $baseUrl;
    private array $parameters = [];
    private const REQUEST_TIMEOUT = 10;

    public function __construct()
    {
        $this->baseUrl = config('services.recipe_api.base_url', '');
        
        if (empty($this->baseUrl)) {
            Log::warning('Recipe API base URL not configured');
        }
    }

    /**
     * Search meal by name
     * @param string $search
     * @return self
     */
    public function search($search): self
    {
        $this->parameters[] = 's=' . urlencode($search);
        return $this;
    }

    /**
     * List all meals by first letter
     * @param string $letter
     * @return self
     */
    public function letter($letter): self
    {
        $this->parameters[] = 'f=' . urlencode($letter);
        return $this;
    }

    /**
     * Filter by ingredients
     * Premium API Only
     * @param array $ingredients
     * @return array
     */
    public function getByIngredients($ingredients): array
    {
        if (empty($ingredients)) {
            return [];
        }

        try {
            $response = Http::timeout(self::REQUEST_TIMEOUT)
                ->get($this->baseUrl . 'filter.php?i=' . urlencode(implode(',', $ingredients)));
            
            if ($response->successful()) {
                return $response->json() ?? [];
            }
            
            Log::warning('Recipe API error', [
                'status' => $response->status(),
                'endpoint' => 'filter.php'
            ]);
            return [];
        } catch (\Exception $e) {
            Log::error('Recipe API request failed', [
                'error' => $e->getMessage(),
                'endpoint' => 'filter.php'
            ]);
            return [];
        }
    }

    /**
     * Get result
     * @return array
     */
    public function get(): array
    {
        if (empty($this->baseUrl) || empty($this->parameters)) {
            return [];
        }

        try {
            $response = Http::timeout(self::REQUEST_TIMEOUT)
                ->get($this->baseUrl . 'search.php?' . implode('&', $this->parameters));
            
            if ($response->successful()) {
                return $response->json() ?? [];
            }
            
            Log::warning('Recipe API error', [
                'status' => $response->status(),
                'endpoint' => 'search.php'
            ]);
            return [];
        } catch (\Exception $e) {
            Log::error('Recipe API request failed', [
                'error' => $e->getMessage(),
                'endpoint' => 'search.php'
            ]);
            return [];
        }
    }

    /**
     * Get meal by ID
     * @param string $id
     * @return array
     */
    public function getById($id): array
    {
        if (empty($this->baseUrl) || empty($id)) {
            return [];
        }

        try {
            $response = Http::timeout(self::REQUEST_TIMEOUT)
                ->get($this->baseUrl . 'lookup.php?i=' . urlencode($id));
            
            if ($response->successful()) {
                return $response->json() ?? [];
            }
            
            Log::warning('Recipe API error', [
                'status' => $response->status(),
                'endpoint' => 'lookup.php'
            ]);
            return [];
        } catch (\Exception $e) {
            Log::error('Recipe API request failed', [
                'error' => $e->getMessage(),
                'endpoint' => 'lookup.php'
            ]);
            return [];
        }
    }
}
