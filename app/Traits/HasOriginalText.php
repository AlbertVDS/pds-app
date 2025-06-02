<?php

namespace App\Traits;

use App\Models\OriginalText;

trait HasOriginalText
{
    /**
     * MorphTo relationship for the original text.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function originalText()
    {
        return $this->morphOne(OriginalText::class, 'foreign');
    }
}
