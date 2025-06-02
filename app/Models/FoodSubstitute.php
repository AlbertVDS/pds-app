<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Food;

class FoodSubstitute extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, SoftDeletes;

    /**
     * The table associated with the model.
     * @var string
     */
    protected $table = 'food_substitutes';

    /**
     * The attributes that are mass assignable.
     * @var array<int, string>
     */
    protected $fillable = [
        'food_id',
        'substitute_id',
        'deleted_at',
    ];

    /**
     * Get food associated with the food substitute
     */
    public function food(): HasOne
    {
        return $this->hasOne(Food::class, 'id', 'food_id');
    }
}
