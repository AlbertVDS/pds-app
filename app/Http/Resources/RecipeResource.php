<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RecipeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'category' => $this->categoryName(),
            'area' => $this->areaName(),
            'instructions' => $this->instructions->instruction,
            'thumbnail_url' => $this->thumbnail_url,
            'tags' => $this->tagNames(),
            'youtube_url' => $this->youtube_url,
            'ingredients' => $this->ingredientMeasurements->map(function ($ingredient) {
                return [
                    "name" => $ingredient->ingredientName(),
                    "measurement" => $ingredient->measurementName(),
                ];
            }),
        ];
    }
}
