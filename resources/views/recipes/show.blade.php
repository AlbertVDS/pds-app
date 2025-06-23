@extends('layout-parts.main')

@section('content')
    @if(!Auth::check())

    @elseif(Auth::check() && $recipe->userFavRecipe)
        <form action="{{ route('user.favorite-recipe.destroy', [$recipe->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-link p-0"><i
                    class="fa-solid fa-star" style="color:yellow"></i></button>
        </form>

    @else
        <form action="{{ route('user.favorite-recipe.store') }}" method="POST">
            @csrf
            <input type="hidden" name="recipe_id" value="{{ $recipe->id }}">
            <button type="submit" class="btn btn-link p-0"><i class="fa-solid fa-star" style="color: lightgray"></i></button>
        </form>
    @endif
            <div class="card m-4">
                <div class="row align-items-start">
                    <div class="col">
                        <img src="{{ $recipe->thumbnail_url }}" class="card-img" alt="{{ $recipe->thumbnail_url }}"
                            style="width: 80%; height: auto;">
                    </div>
                    <div class="col">
                        <b>{{ __('Ingredients') }}:</b><br>
                        <ul class="m-2">
                            @foreach($recipe->ingredientMeasurements as $ingredientMeasurement)
                                <li><b>{{ __($ingredientMeasurement->ingredientName()) }}:</b> <i>{{ $ingredientMeasurement->measurementName() }}</i></li>

                                @foreach ($ingredientMeasurement->ingredient->foods as $food)
                                    @if($food->hasSubstitutes())
                                        <a class="btn btn-link p-0" data-bs-toggle="collapse" href="#{{ $ingredientMeasurement->ingredientName() }}Collapse"
                                            role="button" aria-expanded="false" aria-controls="collapseExample">
                                            {{ __('Show substitutes') }}
                                        </a>
                                        <div class="collapse" id="{{ $ingredientMeasurement->ingredientName() }}Collapse">
                                            <div class="card card-body">
                                                    
                                                @foreach($food->substitutes as $substitute)

                                                    {{ __($substitute->name) }}<br>

                                                @endforeach
                                    
                                            </div>
                                        </div>
                                    @endif
                                @endforeach


                            @endforeach 
                        </ul>
                    </div>
                </div>

                <div class="card-body">
                    <h5 class="card-title">{{ __('Directions') }}:</h5>
                    <p class="card-text">
                        {{ __($recipe->instructions->instruction) }}
                    </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><i class="fa-solid fa-layer-group"></i> {{ $recipe->categoryName() }}</li>
                    <li class="list-group-item"><i class="fa-solid fa-location-dot"></i> {{ $recipe->areaName() }}</li>
                </ul>
            </div>
@endsection