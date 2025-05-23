<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Collection;

class RecipeIngredient extends Model
{
    use SoftDeletes;

    /**
     * Attributes which are cast as set type
     * @var array
     */
    protected $casts = [
        'food_ids' => 'array',
    ];

    protected $table = 'recipe_ingredients';
    protected $fillable = [
        'name',
    ];

    /**
     * Foods associated with this recipe ingredient
     * @return Collection
     */
    public function foods(): Collection
    {
        return $this->food_ids ? Food::whereIn('id', $this->food_ids)->orderBy('name')->get() : new Collection();
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
}
