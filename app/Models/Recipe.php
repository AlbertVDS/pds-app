<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\RecipeArea;
use App\Models\RecipeCategory;
use App\Models\RecipeIngredient;
use Illuminate\Support\Collection;

class Recipe extends Model
{
    use HasFactory;
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
     * Get ingredients
     * @return Collection
     */
    public function ingredientsNames(): Collection
    {
        return RecipeIngredient::whereIn('id', $this->ingredients)->orderByRaw("FIELD(id," . implode(',', $this->ingredients) . ")")->get();
    }

    /**
     * Get measurements
     * @return Collection
     */
    public function measurementNames(): Collection
    {
        return RecipeMeasurement::whereIn('id', $this->measurements)->orderByRaw("FIELD(id," . implode(',', $this->measurements) . ")")->get();
    }

    /**
     * Get ingredients with measurements
     * @return array
     */
    public function getIngredientsWithMeasurements(): array
    {
        $ingredientArray = [];
        $measurements = $this->measurements;

        foreach ($this->ingredientsNames() as $key => $ingredient) {
            $ingredientArray[$ingredient->name] = RecipeMeasurement::find($measurements[$key])->name ?? null;
        }

        return $ingredientArray;
    }

    /**
     * Get area name
     * @return string
     */
    public function areaName(): string
    {
        return $this->hasOne(RecipeArea::class, 'id', 'area_id')->first()->name ?? '';
    }

    /**
     * Get category name
     * @return string
     */
    public function categoryName(): string
    {
        return $this->hasOne(RecipeCategory::class, 'id', 'category_id')->first()->name ?? '';
    }
}
