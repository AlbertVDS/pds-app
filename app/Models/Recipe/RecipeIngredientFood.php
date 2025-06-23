<?php

namespace App\Models\Recipe;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Food\Food;

class RecipeIngredientFood extends Model
{
    use SoftDeletes;

    protected $table = 'recipe_ingredient_foods';
    protected $fillable = [
        'recipe_ingredient_id',
        'food_id',
    ];

    public function foods()
    {
        return $this->hasMany(Food::class, 'id', 'food_id');
    }
}
