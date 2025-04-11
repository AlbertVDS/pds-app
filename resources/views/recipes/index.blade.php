@extends('layout-parts.main')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <form method="GET">
            <div class="input-group mb-3">
                <input type="text" name="search" class="form-control" placeholder="Search for recipes..."
                    value="{{ request('search') }}">
                <button class="btn btn-outline-secondary" type="submit">Search</button>
            </div>
        </form>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Thumbnail</th>
                <th>Name</th>
                <th>Category</th>
                <th>Area</th>
            </tr>
        </thead>
        <tbody> 
            @if(!is_array($recipes))
                <tr>
                    <td colspan="4" class="text-center">No recipes found.</td>
                </tr>
            @else
                @foreach ($recipes as $recipe)
                    <tr>
                        <td>
                            <img src="{{ $recipe['strMealThumb'] }}" alt="{{ $recipe['strMeal'] }}" style="width: 100px; height: auto;">
                        </td>
                        <td>
                            <a href="{{ route('recipes.show', $recipe['idMeal']) }}">
                                {{ $recipe['strMeal'] }}
                            </a>
                        </td>    
                        <td>{{ $recipe['strCategory'] }}</td>
                        <td>{{ $recipe['strArea'] }}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endsection