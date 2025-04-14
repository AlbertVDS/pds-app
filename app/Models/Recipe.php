<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\RecipeArea;
use App\Models\RecipeCategory;
use App\Models\RecipeIngredient;

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
     * @return array
     */
    public function ingredients(): array
    {
        return RecipeIngredient::whereIn('id', $this->ingredients)->get()->toArray();
    }

    /**
     * Get measurements
     * @return array
     */
    public function measurements(): array
    {
        return RecipeIngredient::whereIn('id', $this->measurements)->get()->toArray();
    }

    /**
     * Get ingredients with measurements
     * @return array
     */
    public function getIngredientsWithMeasurements(): array
    {
        return array_combine(
            $this->ingredients,
            $this->measurements
        );
    }
}
