<?php

namespace App\Models\Recipe;

use App\Traits\HasOriginalText;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Language\OriginalText;

class RecipeCategory extends Model
{
    use HasFactory, HasOriginalText, SoftDeletes;

    /**
     * The table associated with the model.
     * @var string
     */
    protected $table = 'recipe_categories';

    /**
     * The attributes that are mass assignable.
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
    ];

    /**
     * MorphTo relationship.
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo<Model, OriginalText>
     */
    public function foreign()
    {
        return $this->morphTo();
    }
}
