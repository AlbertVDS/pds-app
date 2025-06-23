<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Recipe;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProfileFavRecipeController extends Controller
{
    public function index(string $id = null)
    {
        return view('profile.favorite-recipes', [
            'pageTitle' => translate('Favorite Recipes'),
            'user' => Auth::user(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = $request->user();
        $user->favRecipes()->attach($request->recipe_id);
        noty()->success(translate('Recipe added to favorites'));
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recipe $recipe)
    {
        $user = Auth::user();
        $user->favRecipes()->detach($recipe->id);
        noty()->success(translate('Recipe removed from favorites'));
        return redirect()->back();
    }
}
