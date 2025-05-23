@extends('layout-parts.main')

@section('head')
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
@endsection

@section('content')
        @if(isset($mailing) && $mailing->exists())
            <form method="POST" action="{{ route('mailing.update', $mailing) }}">
            @csrf
            @method('PUT')
        @else
            <form method="POST" action="{{ route('mailing.store') }}">
            @csrf
        @endif
        <div class="mb-3">
            <label for="title" class="form-label">{{ __('Title') }}</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $mailing->title ?? '') }}">
            @error('title')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="mailing-group" class="form-label">{{ __('Mailing group') }}</label>
            <select class="form-select" aria-label="Select mailing group" id="mailing-group" name="mailing_group_id">
                <option selected>{{ __('Select mailing group') }}</option>
                @foreach ($mailingGroups as $group)
                    <option value="{{ $group->id }}" {{ old('mailing_group_id', $mailing->mailing_group_id ?? '') == $group->id ? 'selected' : null }} >{{ $group->getName() }}</option>
                @endforeach
            </select>
            @error('mailing_group_id')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="schedule-date" class="form-label">{{ __('Scheduled for') }}</label>
            <input type="datetime-local" class="form-control" id="schedule-date" name="schedule" value="{{ old('schedule', $mailing->schedule ?? '') }}">
            @error('schedule')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3s">
            <label for="email-body" class="form-label">{{ __('Email body') }}</label>
            <trix-editor input="email-body"></trix-editor>
            <textarea class="form-control visually-hidden" id="email-body" name="body">{{ old('body', $mailing->body ?? '') }}</textarea>
            @error('body')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary mt-3">{{ isset($mailing) && $mailing->exists() ? 'Update' : 'Create' }}</button>
    </form>
@endsection
