@extends('layout-parts.main')

@section('content')
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>{{ translate('Name') }}</th>
                    <th>{{ translate('E-mail') }}</th>
                    <th>{{ translate('Role') }}</th>
                    <th>{{ translate('Actions') }}</th>
                </tr>
            </thead>
            <tbody> 
                @foreach ($users as $user)
                    <tr>
                        <td>
                            <a href="{{ route('profiles.user.edit', [$user]) }}">
                                <i class="fa-solid fa-user"></i>
                            {{ $user->name }}
                            </a>
                        </td>
                        <td>
                            {{ $user->email }}
                        </td>
                        <td>
                            {{ $user->role_name }}
                        </td>
                        <td>
                            <form action="{{ route('profiles.user.destroy', [$user]) }}" method="POST">
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
    </div>
@endsection
