@extends('layout-parts.main')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="{{ route('foods.create') }}" class="btn btn-primary">Add Food</a>
        {{ $foods->links() }}
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Type</th>
                <th>Level</th>
                <th>Weight</th>
                <th>Fructose</th>
                <th>Lactose</th>
                <th>Mannitol</th>
                <th>Sorbitol</th>
                <th>GOS</th>
                <th>Fructan</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($foods as $food)
                <tr>
                    <td>{{ $food->name }}</td>
                    <td>{{ $food->type_id }}</td>
                    <td>{{ $food->level }}</td>
                    <td>{{ $food->weight }} gr</td>
                    <td>{{ $food->fructose }}</td>
                    <td>{{ $food->lactose }}</td>
                    <td>{{ $food->mannitol }}</td>
                    <td>{{ $food->sorbitol }}</td>
                    <td>{{ $food->GOS }}</td>
                    <td>{{ $food->fructan }}</td>
                    <td class="content-left">
                        <a href="{{ route('foods.edit', $food->id) }}" class=""><i class="fa-solid fa-pencil"></i></a>
                        <a href="{{ route('foods.edit', $food->id) }}" class=""><i class="fa-solid fa-trash-can"></i></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="{{ route('foods.create') }}" class="btn btn-primary">Add Food</a>
        {{ $foods->links() }}
    </div>
@endsection