<?php

namespace App\Pagination;

use Illuminate\Pagination\LengthAwarePaginator;

class TranslationPaginator
{
    public function paginate($originalText, $request)
    {
        return new LengthAwarePaginator(
            $originalText->forPage($request->page ?? 1, 30),
            $originalText->count(),
            30,
            $request->page ?? 1,
            ['path' => $request->url(), 'query' => $request->query()]
        );
    }
}
