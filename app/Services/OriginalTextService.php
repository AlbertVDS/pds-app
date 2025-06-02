<?php

namespace App\Services;

use App\Models\OriginalText;

class OriginalTextService
{
    /**
     * Get origional text
     * @return \Illuminate\Database\Eloquent\Collection<int, OriginalText>
     */
    public static function getOriginalText()
    {
        return OriginalText::with(relations: 'foreign')
            ->with('translation')
            ->get()
            ->where('related_value', '!=', '')
            ->sortBy(function ($item) {
                return $item->related_value;
            });
    }
}
