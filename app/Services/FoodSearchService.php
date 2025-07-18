<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Food\Food;
use App\Models\Food\FoodType;

class FoodSearchService
{
    public $foods;
    public $fodmaps;
    public $foodTypes;
    public $showTolerate;

    public function search(Request $request)
    {
        $this->foods = Food::query()->with('foodType');
        $request->filled('search') ? $this->foods->where('name', 'LIKE', "%{$request->search}%") : null;
        $this->filterFoodTypes($request);
        $this->filterFodmaps($request);
        $this->filterTolerate($request);
        $this->getSelectedOptions($request);

        $this->foods = $this->foods->paginate(20)->appends(
            request()->query()
        );
        return $this;
    }

    /**
     * Get selected options
     * @param mixed $request
     * @return void
     */
    private function getSelectedOptions($request)
    {
        $this->fodmaps = $request->get('fodmaps') ?? [];
        $this->foodTypes = $request->filled('food-types') ? FoodType::whereIn('id', $request->get('food-types'))->get() : [];
        $this->showTolerate = $request->get('show-tolerate') ?? null;
    }

    /** Filter food types 
     * @param Request $request
     * @return void
     */
    private function filterFoodTypes($request)
    {
        if ($request->filled('food-types')) {
            $this->foods
                ->whereHas('foodType', function ($query) use ($request) {
                    $query->whereIn('food_types.id', $request->get('food-types'));
                });
        }
    }

    /** Filter fodmaps 
     * @param Request $request
     * @return void
     */
    private function filterFodmaps($request)
    {
        foreach ($request->get('fodmaps') ?? [] as $fodmap => $value) {
            $this->foods->where($fodmap, $value);
        }
    }

    /** Filter tolerate 
     * @param Request $request
     * @return void
     */
    private function filterTolerate($request)
    {
        if ($request->filled('filter-tolerance') && auth()->user()->intoleranceSet()) {
            auth()->user()->fodmap->fructose ? $this->foods->where('fructose', '!=', 1) : null;
            auth()->user()->fodmap->lactose ? $this->foods->where('lactose', '!=', 1) : null;
            auth()->user()->fodmap->mannitol ? $this->foods->where('mannitol', '!=', 1) : null;
            auth()->user()->fodmap->sorbitol ? $this->foods->where('sorbitol', '!=', 1) : null;
            auth()->user()->fodmap->GOS ? $this->foods->where('GOS', '!=', 1) : null;
            auth()->user()->fodmap->fructan ? $this->foods->where('fructan', '!=', 1) : null;
        }
    }
}
