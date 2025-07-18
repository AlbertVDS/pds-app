<?php

namespace App\Models\Recipe;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RecipeIngredientMeasurement extends Model
{
    use SoftDeletes;


    protected $table = 'recipe_ingredient_measurements';
    protected $fillable = [
        'recipe_id',
        'ingredient_id',
        'measurement_id',
    ];

    /**
     * Get ingredient
     * @return \Illuminate\Database\Eloquent\Relations\HasOne<RecipeIngredient, RecipeIngredientMeasurement>
     */
    public function ingredient()
    {
        return $this->hasOne(RecipeIngredient::class, 'id', 'ingredient_id');
    }

    public function ingredientName()
    {
        return $this->ingredient ? $this->ingredient->name : '';
    }

    /**
     * Get measurement
     * @return \Illuminate\Database\Eloquent\Relations\HasOne<RecipeIngredient, RecipeIngredientMeasurement>
     */
    public function measurement()
    {
        return $this->hasOne(RecipeMeasurement::class, 'id', 'measurement_id');
    }

    /**
     * Get measurement name
     * @return string
     */
    public function measurementName(): string
    {
        return $this->measurement ? $this->measurement->name : '';
    }
}
