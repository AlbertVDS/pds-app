<?php

namespace App\Http\Controllers\Food;

use App\Http\Controllers\Controller;
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
    public function __construct(FoodSubstituteService $foodSubstituteService)
    {
        $this->foodSubstituteService = $foodSubstituteService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $foods = Food::paginate(10);
        return view('foods.index', [
            'pageTitle' => translate('Food list'),
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
            'pageTitle' => translate('Food details'),
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
            'pageTitle' => translate('Edit food'),
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

    /**
     * Get results based on the search term.
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function autocomplete(Request $request)
    {
        $query = Food::select("name", "id");

        if ($request->filled('q')) {
            $query->where('name', 'LIKE', '%' . $request->get('q') . '%');
        }
        $query->orderBy('name');
        $query->take(20);
        $data = $query->get();

        return response()->json($data);
    }
}
