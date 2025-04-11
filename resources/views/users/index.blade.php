@extends('layout-parts.main')

@section('content')
<h1>Food List</h1>
<a href="{{ route('foods.create') }}" class="btn btn-primary">Add Food</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($foods as $food)
            <tr>
                <td>{{ $food->id }}</td>
                <td>{{ $food->name }}</td>
                <td>{{ $food->price }}</td>
                <td>
                    <a href="{{ route('foods.edit', $food->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('foods.destroy', $food->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>