@extends('layout-parts.main')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        @can('isAdmin')
            <a href="{{ route('foods.create') }}" class="btn btn-primary">{{ translate('Add Food') }}</a>
        @endcan

        {{ $foods->links() }}
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>{{ translate('Name') }}</th>
                <th>{{ translate('Has substitutes') }}</th>
                <th>{{ translate('Type') }}</th>
                <th>{{ translate('Level') }}</th>
                <th>{{ translate('Weight') }}</th>
                <th>{{ translate('Fructose') }}</th>
                <th>{{ translate('Lactose') }}</th>
                <th>{{ translate('Mannitol') }}</th>
                <th>{{ translate('Sorbitol') }}</th>
                <th>{{ translate('GOS') }}</th>
                <th>{{ translate('Fructan') }}</th>
                @can('isAdmin')
                    <th>{{ translate('Actions') }}</th>
                @endcan
            </tr>
        </thead>
        <tbody>
            @if($foods->isEmpty())
                <tr>
                    <td colspan="{{ Gate::allows('is-admin') ? 12 : 11 }}" class="text-center">
                        {{ translate('No foods found') }}
                    </td>
                </tr>
            @else
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
                        @can('isAdmin')
                            <td class="content-left d-flex">
                                <a href="{{ route('foods.edit', $food->id) }}" class="pe-1"><i class="fa-solid fa-pencil"></i></a>
                                <form action={{ route('foods.destroy', $food->id) }} method="POST" class="d-flex">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-link p-0"><i
                                            class="fa-solid fa-trash"></i></button>
                                </form>
                            </td>
                        @endcan
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    <div class="d-flex justify-content-between align-items-center mb-3">
        @can('isAdmin')
            <a href="{{ route('foods.create') }}" class="btn btn-primary">{{ translate('Add Food') }}</a>
        @endcan

        {{ $foods->links() }}
    </div>
@endsection