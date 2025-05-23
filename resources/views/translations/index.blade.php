@extends('layout-parts.main')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        {{ $languages->links() }}
    </div>
    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th>                        
                    {{ __('Language') }}
                </th>
                <th>{{ __('Comepletion') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($languages as $language)
                <tr>
                    <td>
                        <a href="{{ route('translations.show', $language->id) }}">
                            {{ __($language->name) }}
                        </a>
                    </td>
                    <td>{{ $language->complete() }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-between align-items-center mb-3">
        {{ $languages->links() }}
    </div>
@endsection
