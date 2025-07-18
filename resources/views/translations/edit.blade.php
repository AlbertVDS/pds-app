@extends('layout-parts.main')

@section('content')
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>{{ translate('Original') }}</th>
                <th>{{ translate('Translated') }}</th>
            </tr>
        </thead>
        <tbody> 
            <form action="{{ route('translations.update', $translation->id) }}" method="POST" class="mb-3">
                @csrf
                @method('PUT')           
            <tr>
                <td class="align-top" style="white-space: pre-wrap">
                    {{ $translation->original->related_value }}
                </td>
                <td class="w-50 pt-5" style="height: 120vh">
                    <textarea class="form-control" rows="5" id="translation" name="translation" style="height: 100%">{{ $translation->translation }}</textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" class="btn btn-primary">{{ translate('Save') }}</button>
                </td>
            </tr>
        </tbody>
    </table>
@endsection