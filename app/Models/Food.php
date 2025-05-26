<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Collection;
use App\Models\FoodSubstitute;

class Food extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The table associated with the model.
     * @var string
     */
    protected $table = 'foods';

    /**
     * The attributes that are mass assignable.
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'type',
        'level',
        'weight',
        'fructose',
        'lactose',
        'mannitol',
        'sorbitol',
        'GOS',
        'fructan',
    ];

    /**
     * The attributes that should be cast to native types.
     * @var array<string, string>
     */
    public array $fodmaps = [
        'fructose',
        'lactose',
        'mannitol',
        'sorbitol',
        'GOS',
        'fructan'
    ];

    /**
     * Get food associated with the food substitute
     * 
     */
    public function substitutes()
    {
        return $this->belongsToMany(
            Food::class,
            'food_substitutes',
            'food_id',
            'substitute_id'
        );
    }

    /**
     * Get food ids associated with the food substitute
     * @return array
     */
    public function substitutesIds(): array
    {
        return $this->substitutes()->pluck('substitute_id')->toArray();
    }

    /**
     * Check if food has substitutes
     * @return string
     */
    public function hasSubstitutes(): string
    {
        return $this->substitutes()->exists();
    }

    /**
     * Get all possible substitutes for the food.
     * @return Collection
     */
    public function getPossibleSubstitutes(): Collection
    {
        $sameTypeFoods = Food::where('type_id', $this->type_id);
        $sameTypeFoods->where('id', '!=', $this->id);

        $this->fructose ? $sameTypeFoods->where('fructose', '=', 0) : null;
        $this->lactose ? $sameTypeFoods->where('lactose', '=', 0) : null;
        $this->mannitol ? $sameTypeFoods->where('mannitol', '=', 0) : null;
        $this->sorbitol ? $sameTypeFoods->where('sorbitol', '=', 0) : null;
        $this->GOS ? $sameTypeFoods->where('GOS', '=', 0) : null;
        $this->fructan ? $sameTypeFoods->where('fructan', '=', 0) : null;

        return $sameTypeFoods->orderBy('name')->get();
    }

    /**
     * Get all possible substitutes for the food as chunked collection.
     * @return Collection
     */
    public function getPossibleSubstitutesChunked(): Collection
    {
        $result = $this->getPossibleSubstitutes();
        return $result->chunk(ceil(count($result) / 3));
    }

    public function getName(): string
    {
        return __($this->name);
    }

    /**
     * Get the food type associated with the food.
     * @return string
     */
    public function getTypeName(): string
    {
        return __($this->hasOne(FoodType::class, 'id', 'type_id')->first()->name);
    }

    /**
     * Get readable food weight.
     * @return string
     */
    public function weightText(): string
    {
        return $this->weight ?  "$this->weight gr" : __('Free use');
    }

    /**
     * Get origional text
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne<OriginalText, Food>
     */
    public function originalText()
    {
        return $this->morphOne(OriginalText::class, 'foreign');
    }
}
