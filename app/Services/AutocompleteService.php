<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AutocompleteService
{
    /**
     * Get results based on the search term.
     * @param string $modelClass
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function autocomplete($modelClass, Request $request)
    {
        $searchTerm = $request->input('q', '');
        
        $query = $modelClass::withoutTrashed();
        $query->with('originalText.translation');
        
        if (Gate::allows('isUser')) {
            $query->whereHas('originalText.translation', function ($q) use ($searchTerm) {
                $q->where('translation', 'LIKE', '%' . $searchTerm . '%')
                    ->where('language_id', Auth::user()->language_id);
            });
        } else {
            $query->where('name', 'LIKE', '%' . $searchTerm . '%');
        }

        $data = $query->orderBy('name')->limit(20)->get();
        $data = $this->translate($data);

        return response()->json($data);
    }

    /**
     * Translate the ingredient names if the user is authenticated.
     *
     * @param \Illuminate\Support\Collection $data
     * @return \Illuminate\Support\Collection
     */
    private function translate($data)
    {
        if (Auth::check()) {
            foreach ($data as $item) {
                $item->name = translate($item->name);
            }
        }
        return $data;
    }
}
