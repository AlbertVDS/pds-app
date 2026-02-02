<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FoodResource extends JsonResource
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
            'type' => $this->foodType?->name ?? 'Unknown',
            'level' => $this->level,
            'weight' => $this->weight,
            'fructose' => $this->fructose,
            'lactose' => $this->lactose,
            'mannitol' => $this->mannitol,
            'sorbitol' => $this->sorbitol,
            'GOS' => $this->GOS,
            'fructan' => $this->fructan,
            'foodType' => $this->foodType,
            'substitutes' => $this->substitutes->map(function ($substitute) {
                return [
                    'id' => $substitute->id,
                    'name' => $substitute->name,
                    'type' => $substitute->foodType?->name ?? 'Unknown',
                    'level' => $substitute->level,
                    'weight' => $substitute->weight,
                    'fructose' => $substitute->fructose,
                    'lactose' => $substitute->lactose,
                    'mannitol' => $substitute->mannitol,
                    'sorbitol' => $substitute->sorbitol,
                    'GOS' => $substitute->GOS,
                    'fructan' => $substitute->fructan
                ];
            }),
        ];
    }
}
