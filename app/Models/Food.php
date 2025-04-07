<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\FoodSubstitute;

class Food extends Model
{
    /**
     * The table associated with the model.
     * @var string
     */
    protected $table = 'foods';

    /**
     * The attributes that are mass assignable.
     * @var array<int, string>
     */
    protected $fillable = [
        'type',
        'low',
        'fructose_l',
        'lactose_l',
        'mannitol_l',
        'sorbitol_l',
        'gos_l',
        'fructan_l',
        'medium',
        'fructose_m',
        'lactose_m',
        'mannitol_m',
        'sorbitol_m',
        'gos_m',
        'fructan_m',
        'high',
        'fructose_h',
        'lactose_h',
        'mannitol_h',
        'sorbitol_h',
        'gos_h',
        'fructan_h',
    ];

    /**
     * Get food substitute asociated with food
     */
    public function substitutes(): HasMany
    {
        return $this->hasMany(FoodSubstitute::class, 'food_id', 'id');
    }
}
