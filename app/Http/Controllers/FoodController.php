<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use App\Services\FoodSubstituteService;

class FoodController extends Controller
{
    private $foodSubstituteService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->foodSubstituteService = new FoodSubstituteService();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $foods = Food::paginate(10);
        return view('foods.index', [
            'pageTitle' => 'Food list',
            'foods' => $foods
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }


    /**
     * Display the specified resource.
     */
    public function show(Food $food)
    {
        return view('foods.details', [
            'pageTitle' => 'Food details',
            'food' => $food,
            'sameTypeFoods' => $food->getPossibleSubstitutesChunked(),
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Food $food)
    {
        return view('foods.details', [
            'pageTitle' => 'Edit food',
            'food' => $food,
            'sameTypeFoods' => $food->getPossibleSubstitutesChunked(),
            'substituteIds' => $food->substitutesIds(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Food $food)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Food $food)
    {
        //
    }
}
