@extends('layout-parts.main')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="{{ route('foods.create') }}" class="btn btn-primary">{{ __('Add Food') }}</a>
        {{ $foods->links() }}
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>{{ __('Name') }}</th>
                <th>{{ __('Has substitutes') }}</th>
                <th>{{ __('Type') }}</th>
                <th>{{ __('Level') }}</th>
                <th>{{ __('Weight') }}</th>
                <th>{{ __('Fructose') }}</th>
                <th>{{ __('Lactose') }}</th>
                <th>{{ __('Mannitol') }}</th>
                <th>{{ __('Sorbitol') }}</th>
                <th>{{ __('GOS') }}</th>
                <th>{{ __('Fructan') }}</th>
                @if(Auth::user() && Auth::user()->isAdmin())
                    <th>{{ __('Actions') }}</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach ($foods as $food)
                <tr>
                    <td>{{ $food->getName() }}</td>
                    <td>{{ $food->hasSubstitutes() }}</td>
                    <td>{{ $food->type_id }}</td>
                    <td>{{ $food->level }}</td>
                    <td>{{ $food->weightText() }}</td>
                    <td>{{ $food->fructose }}</td>
                    <td>{{ $food->lactose }}</td>
                    <td>{{ $food->mannitol }}</td>
                    <td>{{ $food->sorbitol }}</td>
                    <td>{{ $food->GOS }}</td>
                    <td>{{ $food->fructan }}</td>
                    @if(Auth::user() && Auth::user()->isAdmin())
                        <td class="content-left d-flex">
                            <a href="{{ route('foods.edit', $food->id) }}" class="pe-1"><i class="fa-solid fa-pencil"></i></a>
                            <form action={{ route('foods.destroy', $food->id) }} method="POST" class="d-flex">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-link p-0"><i
                                        class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="{{ route('foods.create') }}" class="btn btn-primary">{{ __('Add Food') }}</a>
        {{ $foods->links() }}
    </div>
@endsection