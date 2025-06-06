<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserFavRecipeController extends Controller
{
    public function index(string $id = null)
    {
        return view('users.favorite-recipes', [
            'pageTitle' => __('Favorite Recipes'),
            'user' => Auth::user(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $user->favRecipes()->attach($request->recipe_id);
        return redirect()->back()->with('success', __('Recipe added to favorites'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recipe $recipe)
    {
        $user = Auth::user();
        $user->favRecipes()->detach($recipe->id);
        return redirect()->back()->with('success', __('Recipe removed from favorites'));
    }
}
