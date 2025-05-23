@extends('layout-parts.main')

@section('content')
    <div class="card m-4">
        <div class="row align-items-start">
            <div class="col">
                <img src="{{ $recipe->thumbnail_url }}" class="card-img" alt="{{ $recipe->thumbnail_url }}"
                    style="width: 80%; height: auto;">
            </div>
            <div class="col">
                <b>{{ __('Ingredients') }}:</b><br>
                <ul class="m-2">
                    @foreach($recipe->getIngredientsWithMeasurements() as $ingredient => $measurement)
                        <li><b>{{ $ingredient }}:</b> <i>{{ $measurement }}</i></li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="card-body">
            <h5 class="card-title">{{ __('Directions') }}:</h5>
            <p class="card-text">
                {{ __($recipe->instructions) }}
            </p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><i class="fa-solid fa-layer-group"></i> {{ $recipe->categoryName() }}</li>
            <li class="list-group-item"><i class="fa-solid fa-location-dot"></i> {{ $recipe->areaName() }}</li>
        </ul>
    </div>
@endsection