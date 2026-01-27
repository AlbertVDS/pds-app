<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        
        if ($request->filled('search')) {
            $this->foods->where('name', 'LIKE', "%{$request->input('search')}%");
        }
        
        $this->filterFoodTypes($request);
        $this->filterFodmaps($request);
        $this->filterTolerate($request);
        $this->getSelectedOptions($request);

        $this->foods = $this->foods->paginate(20)->appends(
            $request->query()
        );
        return $this;
    }

    /**
     * Get selected options
     * @param Request $request
     * @return void
     */
    private function getSelectedOptions($request)
    {
        $this->fodmaps = $request->input('fodmaps', []);
        $this->foodTypes = $request->filled('food-types') 
            ? FoodType::whereIn('id', $request->input('food-types', []))->get() 
            : [];
        $this->showTolerate = $request->input('show-tolerate');
    }

    /**
     * Filter food types 
     * @param Request $request
     * @return void
     */
    private function filterFoodTypes($request)
    {
        if ($request->filled('food-types')) {
            $this->foods->whereHas('foodType', function ($query) use ($request) {
                $query->whereIn('food_types.id', $request->input('food-types', []));
            });
        }
    }

    /**
     * Filter fodmaps 
     * @param Request $request
     * @return void
     */
    private function filterFodmaps($request)
    {
        $fodmaps = $request->input('fodmaps', []);
        foreach ($fodmaps as $fodmap => $value) {
            $this->foods->where($fodmap, $value);
        }
    }

    /**
     * Filter tolerate 
     * @param Request $request
     * @return void
     */
    private function filterTolerate($request)
    {
        if ($request->filled('filter-tolerance') && Auth::check() && Auth::user()->intoleranceSet()) {
            $userFodmap = Auth::user()->fodmap;
            
            if ($userFodmap->fructose) {
                $this->foods->where('fructose', '!=', 1);
            }
            if ($userFodmap->lactose) {
                $this->foods->where('lactose', '!=', 1);
            }
            if ($userFodmap->mannitol) {
                $this->foods->where('mannitol', '!=', 1);
            }
            if ($userFodmap->sorbitol) {
                $this->foods->where('sorbitol', '!=', 1);
            }
            if ($userFodmap->GOS) {
                $this->foods->where('GOS', '!=', 1);
            }
            if ($userFodmap->fructan) {
                $this->foods->where('fructan', '!=', 1);
            }
        }
    }
}
