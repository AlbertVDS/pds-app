<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\FoodResource;
use App\Http\Resources\FoodResourceCollection;
use App\Services\FoodSearchService;
use App\Models\Food\Food;

class FoodController extends Controller
{
    /**
     * @SWG\Get(
     *     path="/foods",
     *     summary="Get a list of food",
     *     tags={"Food"},
     *     @SWG\Response(response=200, description="Successful operation"),
     *     @SWG\Response(response=400, description="Invalid request")
     *     @SWG\Response(response=401, description="Unauthenticated")
     * )
     */
    public function index(Request $request)
    {
        $foods = (new FoodSearchService())->search($request)->foods;
        return FoodResource::collection($foods);
    }

    /**
     * @SWG\Get(
     *     path="/foods",
     *     summary="Get a list of food",
     *     tags={"Food"},
     *     @SWG\Response(response=200, description="Successful operation"),
     *     @SWG\Response(response=400, description="Invalid request")
     *     @SWG\Response(response=401, description="Unauthenticated")
     * )
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new FoodResource(Food::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
