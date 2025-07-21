<?php

namespace App\Services;

use App\Models\Language\OriginalText;

class OriginalTextService
{
    /**
     * Get origional text
     * @return \Illuminate\Database\Eloquent\Collection<int, OriginalText>
     */
    public function getOriginalText()
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
