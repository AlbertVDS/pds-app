<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FoodResourceCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
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
        ];
    }
}
