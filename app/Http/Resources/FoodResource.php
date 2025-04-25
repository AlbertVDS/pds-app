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
            'name' => $this->name,
            'type' => $this->getTypeName(),
            'level' => $this->level,
            'weight' => $this->weight,
            'fructose' => $this->fructose,
            'lactose' => $this->lactose,
            'mannitol' => $this->mannitol,
            'sorbitol' => $this->sorbitol,
            'GOS' => $this->GOS,
            'fructan' => $this->fructan,
            'substitutes' => $this->substitutes->map(function ($substitute) {
                $sub = $substitute->food;
                return [
                    'id' => $sub->id,
                    'name' => $sub->name,
                    'type' => $sub->getTypeName(),
                    'level' => $sub->level,
                    'weight' => $sub->weight,
                    'fructose' => $sub->fructose,
                    'lactose' => $sub->lactose,
                    'mannitol' => $sub->mannitol,
                    'sorbitol' => $sub->sorbitol,
                    'GOS' => $sub->GOS,
                    'fructan' => $sub->fructan
                ];
            }),
        ];
    }
}
