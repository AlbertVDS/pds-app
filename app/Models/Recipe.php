<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\RecipeArea;
use App\Models\RecipeCategory;
use App\Models\RecipeIngredientMeasurement;
use App\Models\RecipeInstruction;
use App\Models\UserFavRecipe;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Auth;

class Recipe extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The table associated with the model.
     * @var string
     */
    protected $table = 'recipes';

    /**
     * The attributes which are cast as set type
     * @var array
     */
    protected $casts = [
        'tags' => 'array',
        'ingredients' => 'array',
        'measurements' => 'array',
    ];


    /**
     * The attributes that are mass assignable.
     * @var array<int, string>
     */
    protected $fillable = [
        'tmdb_id',
        'name',
        'category_id',
        'area_id',
        'instructions',
        'thumbnail_url',
        'tags',
        'youtube_url',
        'ingredients',
        'measurements',
    ];

    /**
     * Get area name
     * @return string
     */
    public function area(): string
    {
        return $this->hasOne(RecipeArea::class, 'id', 'area_id')->first()->name;
    }


    /**
     * Get category name
     * @return string
     */
    public function category(): string
    {
        return $this->hasOne(RecipeCategory::class, 'id', 'category_id')->first()->name;
    }

    /**
     * Get recipe name and translate it if needed
     * @return array|string|null
     */
    public function getName(): string
    {
        return __($this->name);
    }

    public function ingredientMeasurements(): HasMany
    {
        return $this->hasMany(RecipeIngredientMeasurement::class, 'recipe_id', 'id');
    }

    /**
     * Get area name
     * @return string
     */
    public function areaName(): string
    {
        return __($this->hasOne(RecipeArea::class, 'id', 'area_id')->first()->name ?? '');
    }

    /**
     * Get category name
     * @return string
     */
    public function categoryName(): string
    {
        return __($this->hasOne(RecipeCategory::class, 'id', 'category_id')->first()->name ?? '');
    }

    /**
     * Get tag names
     * @return string
     */
    public function tagNames(): string
    {
        return implode(', ', array_map(function ($tag) {
            return __(RecipeTag::find($tag)->name ?? null);
        }, $this->tags));
    }

    /**
     * Get recipe instructions
     * 
     */
    public function instructions()
    {
        return $this->hasOne(RecipeInstruction::class, 'id', 'id');
    }

    public function instructionText(): string
    {
        return __($this->instructions ? $this->instructions->instruction : '');
    }

    /**
     * MorphTo relationship.
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo<Model, OriginalText>
     */
    public function foreign()
    {
        return $this->morphTo();
    }

    public function userFavRecipe()
    {
        return $this->belongsTo(UserFavRecipe::class, 'id', 'recipe_id')
            ->where('user_id', Auth::user()->id);
    }
}
