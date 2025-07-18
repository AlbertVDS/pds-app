@extends('layout-parts.main')

@section('content')
    <div class="card m-4">
        <div class="card-header">
            <h5 class="card-title">{{ $food->getName() }}</h5>
        </div>
        <div class="card-body">
            <div class="container text-center">
                <div class="row align-items-start">
                    <div class="col">
                        {{ translate('Type') }}: {{ $food->getTypeName() }}
                    </div>
                    <div class="col">
                        {{ translate('Level') }}: @include('foods.level', ['level' => $food->level])
                    </div>
                    <div class="col">
                        {{ translate('Weight') }}: {{ $food->weightText() }}
                    </div>
                </div>
            </div>
            <div class="container text-center">
                <div class="row align-items-start">

                @foreach ($food->fodmaps as $fodmap)
                    <div class="col">
                        {{ ucfirst($fodmap) }}: @include('foods.contains', ['name' => ucfirst($fodmap), 'hasFodmap' => $food->$fodmap])
                    </div>
                @endforeach
                </div>
            </div>
        </div>
        <div class="card-header">
            <h6 class="card-title">{{ translate('Substitutes') }}</h6>
        </div>
        <div class="card-body">
            <div class="container text-center">
                <div class="row align-items-start">
                    @foreach($sameTypeFoods as $key => $chunk)
                        <div class="col text-start">
                            @foreach ($chunk as $sameTypeFood)
                                <div class="form-check text-nowrap">
                                    @if(Route::currentRouteAction() == 'App\Http\Controllers\FoodController@edit')
                                        <input class="form-check-input"  type="checkbox" id="{{ $sameTypeFood->id }}" {{ in_array($sameTypeFood->id, $substituteIds) ? 'checked' : '' }}>
                                               
                                    @endif
                                    <label class="form-check-label" for="check{{ $sameTypeFood->getName() }}">
                                        {{ $sameTypeFood->getName() }}
                                        @foreach($food->fodmaps as $fodmap)
                                            @include('foods.contains', ['name' => $fodmap, 'hasFodmap' => $sameTypeFood->$fodmap])
                                        @endforeach
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>


        </div>
        <div class="card-footer text-muted">
            <a href="{{ route('foods.index') }}" class="btn btn-primary">{{ translate('Back') }}</a>
            @if(Route::currentRouteAction() == 'App\Http\Controllers\FoodController@edit')
                <form action="{{ route('foods.destroy', $food->id) }}" method="POST" class="d-inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">{{ translate('Delete') }}</button>
                </form>
            @endif
        </div>
    </div>

    @if(Route::currentRouteAction() == 'App\Http\Controllers\FoodController@edit')
    <script>
        $(document).ready(function () {
            $('.form-check-input*').on('click', function () {
                const elementId = $(this).attr('id');
                const isChecked = $(this).is(':checked');

                $.ajax({
                    url: '{{ route('save-substitute') }}',
                    type: 'POST',
                    data: { 
                        food_id: {{ $food->id }},
                        substitute_id: elementId,
                        checked: isChecked,
                        _token: "{{ csrf_token() }}",
                    },
                    success: function (response) {
                        console.log(response.message);
                    },
                    error: function (xhr, status, error) {
                        console.error('Error:', error);
                    }
                });
            });
        });
    </script>
    @endif

@endsection
