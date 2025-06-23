@extends('layout-parts.main')

@section('content')

    <div class="container">

        @if($user->favRecipes->isEmpty())
            <p>{{ __('You have no favorite recipes yet.') }}</p>
        @else
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>{{ __('Thumbnail') }}</th>
                        <th>{{ __('Name') }}</th>
                        <th>{{ __('Category') }}</th>
                        <th>{{ __('Area') }}</th>
                        <th>{{ __('Actions') }}</th>
                    </tr>
                </thead>
                <tbody> 
                    @foreach ($user->favRecipes as $recipe)
                        <tr>
                            <td>
                                <img src="{{ $recipe->thumbnail_url }}" alt="{{ $recipe->name }}" style="width: 100px; height: auto;">
                            </td>
                            <td>
                                <a href="{{ route('recipes.show', $recipe->id) }}">
                                    {{ $recipe->getName() }}
                                </a><br>
                                {{ $recipe->tagNames() }}
                            </td>
                            <td>{{ $recipe->categoryName() }}</td>
                            <td>{{ $recipe->areaName() }}</td>
                            <td>
                                <form action="{{ route('profiles/user.favorite-recipe.destroy', [$recipe->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-link p-0"><i
                                            class="fa-solid fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

@endsection

