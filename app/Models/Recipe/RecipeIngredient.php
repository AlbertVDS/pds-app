<?php

namespace App\Models\Recipe;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\HasOriginalText;
use App\Models\Food\Food;
use App\Models\Language\OriginalText;

class RecipeIngredient extends Model
{
    use HasOriginalText, SoftDeletes;

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
        return translate($this->name);
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
