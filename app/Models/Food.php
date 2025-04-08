<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\FoodSubstitute;

class Food extends Model
{
    use HasFactory;
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
        'name',
        'type',
        'level',
        'weight',
        'fructose',
        'lactose',
        'mannitol',
        'sorbitol',
        'GOS',
        'fructan',
    ];

    /**
     * Get food substitute asociated with food
     */
    public function substitutes(): HasMany
    {
        return $this->hasMany(FoodSubstitute::class, 'food_id', 'id');
    }
}
