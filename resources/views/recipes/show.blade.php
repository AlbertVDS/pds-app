@extends('layout-parts.main')

@section('content')
    <div class="card m-4">
        <div class="row align-items-start">
            <div class="col">
                <img src="{{ $recipe['strMealThumb'] }}" class="card-img" alt="{{ $recipe['strMealThumb'] }}"
                    style="width: 80%; height: auto;">
            </div>
            <div class="col">
                <b>Ingredients:</b><br>
                <ul class="m-2">
                    @for ($i = 1; $i <= 20; $i++)
                        @if ($recipe['strIngredient' . $i] && $recipe['strMeasure' . $i])
                            <li>{{ $recipe['strIngredient' . $i] }} - {{ $recipe['strMeasure' . $i] }}</li>
                        @endif

                    @endfor
                </ul>
            </div>
        </div>

        <div class="card-body">

            <p class="card-text">
                {{ $recipe['strInstructions'] }}
            </p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><i class="fa-solid fa-layer-group"></i> {{ $recipe['strCategory'] }}</li>
            <li class="list-group-item"><i class="fa-solid fa-location-dot"></i> {{ $recipe['strArea'] }}</li>
        </ul>
    </div>
@endsection