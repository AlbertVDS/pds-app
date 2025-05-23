<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
