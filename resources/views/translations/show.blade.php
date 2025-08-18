@extends('layout-parts.main')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <form action="{{ route('translations.show', $language->id ) }}" method="GET" class="mb-3">
            <input type="text" name="search" class="form-control" placeholder="{{ translate('Search') }}" value="{{ request()->input('search') }}">
        </form>
        {{ $translations->links() }}
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

            @foreach ($translations as $translation)
                <tr>
                    <td>{{ strlen($translation->originalText->related_value) > 100 ? substr($translation->originalText->related_value, 0, 100) . "..." : $translation->originalText->related_value }}</td>
                    <td>{{ strlen($translation->translation) > 100 ? substr($translation->translation, 0, 100) . "..." : $translation->translation }}</td>
                    <td>
                        <a href="{{ route('translations.edit', $translation->id) }}" class="pe-1"><i class="fa-solid fa-pencil"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-between align-items-center mb-3">
        {{ $translations->links() }}
    </div>
@endsection