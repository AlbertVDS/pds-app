<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\RecipeIngredientFood;

class RecipeIngredient extends Model
{
    use SoftDeletes;

    protected $table = 'recipe_ingredients';
    protected $fillable = [
        'name',
    ];

    /**
     * Foods associated with this recipe ingredient
     
     */
    public function foods()
    {
        return $this->belongsToMany(Food::class, 'recipe_ingredient_foods', 'recipe_ingredient_id', 'food_id')->wherePivotNull('deleted_at');
    }

    public function getName()
    {
        return __($this->name);
    }

    /**
     * MorphTo relationship.
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo<Model, OriginalText>
     */
    public function foreign()
    {
        return $this->morphTo();
    }

    public function getSubstitutesAttribute()
    {
        $result = [];
        foreach ($this->foods() as $food) {
            foreach ($food->substitutes as $substitute) {
                if (!in_array($substitute->id, $result)) {
                    $result[] = $substitute;
                }
            }
        }

        return $result;
    }
}
