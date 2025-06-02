<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AutocompleteService
{
    // /**
    //  * Get results based on the search term.
    //  * @param Request $request
    //  * @return \Illuminate\Http\JsonResponse
    //  */
    // public function autocomplete($modelClass, Request $request)
    // {
    //     $query = $modelClass::select("name", "id");

    //     $request->filled('q') ? $query->where('name', 'LIKE', '%' . $request->get('q') . '%') : null;
    //     $query->orderBy('name');
    //     $query->take(20);
    //     $data = $query->get();

    //     return response()->json($data);
    // }

    /**
     * Get results based on the search term.
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public static function autocomplete($modelClass, Request $request)
    {
        $query = $modelClass::withoutTrashed();
        $query->with('originalText.translation');
        if (Auth::check()) {
            $query->whereHas('originalText.translation', function ($q) use ($request) {
                $q->where('translation', 'LIKE', '%' . $request->get('q') . '%')
                    ->where('language_id', Auth::user()->language_id);
            });
        } else {
            $query->where('name', 'LIKE', '%' . $request->get('q') . '%');
        }

        $query->orderBy('name');
        $query->take(20);
        $data = $query->get();
        $data = self::translate($data);

        return response()->json($data);
    }

    /**
     * Translate the ingredient names if the user is authenticated.
     *
     * @param \Illuminate\Database\Eloquent\Collection $data
     * @return \Illuminate\Database\Eloquent\Collection
     */
    private static function translate($data)
    {
        if (Auth::user()) {
            foreach ($data as $item) {
                $item->name = __($item->name);
            }
        }
        return $data;
    }
}
