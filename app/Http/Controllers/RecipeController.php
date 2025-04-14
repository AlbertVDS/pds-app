<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class RecipeController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $recipes = Recipe::query();

        $request->filled('search') ? $recipes->where('name', 'LIKE', '%' . $request->get('search') . '%') : null;
        $request->filled('recipe-ingredients') ? $recipes->whereIn('ingredients', $request->get('recipe-ingredients')) : null;

        return view(
            'recipes.index',
            [
                'pageTitle' => 'Recipes',
                'recipes' => $recipes->orderBy('name')->paginate(10) ?? '',
                'search' => $request->get('search') ?? '',
            ]
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $recipe = Recipe::find($id);

        return view(
            'recipes.show',
            [
                'pageTitle' => $recipe->name ?? '',
                'recipe' => $recipe ?? []
            ]
        );
    }
}
