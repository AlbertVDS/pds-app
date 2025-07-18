<?php

namespace App\Models\Food;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Language\OriginalText;

class FoodType extends Model
{
    use SoftDeletes;

    /**
     * Get origional text
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne<OriginalText, Food>
     */
    public function originalText()
    {
        return $this->morphOne(OriginalText::class, 'foreign');
    }
}
