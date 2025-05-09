@extends('layout-parts.main')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="{{ route('mailing.create') }}" class="btn btn-primary">Add Mailing</a>
        {{ $mailings->links() }}
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Title</th>
                <th>Mailing Group</th>
                <th>Schedule</th>
                <th>Sent</th>
                @if(Auth::user() && Auth::user()->isAdmin())
                    <th>Actions</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach ($mailings as $mailing)
                <tr>
                    <td>{{ $mailing->title }}</td>
                    <td>{{ $mailing->mailingGroupName() }}</td>
                    <td>{{ $mailing->schedule }}</td>
                    <td>
                        @if($mailing->sent)
                            <i class="fa-solid fa-check text-success"></i>
                        @else
                            <i class="fa-solid fa-calendar-days">
                        @endif
                    </td>
                    @if(Auth::user() && Auth::user()->isAdmin())
                        <td class="content-left d-flex">
                            <a href="{{ route('mailing.edit', $mailing->id) }}" class="pe-1"><i class="fa-solid fa-pencil"></i></a>
                            <form action={{ route('mailing.destroy', $mailing->id) }} method="POST" class="d-flex">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-link p-0"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="{{ route('mailing.create') }}" class="btn btn-primary">Add Mailing</a>
        {{ $mailings->links() }}
    </div>
@endsection
