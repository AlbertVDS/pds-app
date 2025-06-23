@extends('layout-parts.main')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <form action="{{ route('translations.show', $language->id ) }}" method="GET" class="mb-3">
            <input type="text" name="search" class="form-control" placeholder="{{ translate('Search') }}" value="{{ request()->input('search') }}">
        </form>
        {{ $originalText->links() }}
    </div>
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>{{ translate('Original text') }}</th>
                <th>{{ translate('Translated text') }}</th>
                <th>{{ translate('Action') }}</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($originalText as $original)
                <tr>
                    <td>{{ strlen($original->related_value) > 100 ? substr($original->related_value, 0, 100) . "..." : $original->related_value }}</td>
                    <td>{{ strlen($original->translation->translation) > 100 ? substr($original->translation->translation, 0, 100) . "..." : $original->translation->translation }}</td>
                    <td>
                        <a href="{{ route('translations.edit', $original->translation->id) }}" class="pe-1"><i class="fa-solid fa-pencil"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-between align-items-center mb-3">
        {{ $originalText->links() }}
    </div>
@endsection