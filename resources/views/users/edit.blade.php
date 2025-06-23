@extends('layout-parts.main')

@section('head')
    <!-- Select2 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <style>
        .select2-selection__rendered {
            line-height: 31px !important;
        }

        .select2-container .select2-selection--single {
            height: 35px !important;
        }

        .select2-search__field {
            margin-top: 5px !important;
            vertical-align: inherit !important;
        }

        .select2-selection__arrow {
            height: 34px !important;
        }
    </style>
@endsection

@section('content')
    <form action="{{ route('user.settings.update') }}" method="POST" id="settings-form">
        @csrf
        @method('POST')
        <div class="container">
            <h3 class="mb-3">{{ translate('Profile') }}</h3>
            <div class="card mb-4">
                <div class="card-body">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">{{ translate('Name') }}</span>
                        <input type="text" class="form-control" aria-label="Username" name="user[name]" value="{{ $user->name }}" aria-describedby="basic-addon1">                
                    </div>
                    <p><strong>Email:</strong> {{ $user->email }}</p>
                    <p>
                        <strong>Language:</strong>
                        <select id="language-select" name="language" class="form-select">
                            <option value="{{ $defaultLanguage->id }}"
                                data-image="{{ 'https://' . request()->getHost() . '/img/flags/' . $defaultLanguage->code . '.png' }}" {{ $user->language_id === $defaultLanguage->id ? 'selected' : '' }}>
                                {{ translate($defaultLanguage->name) . (translate($defaultLanguage->name) != $defaultLanguage->name ? ' - ' . $defaultLanguage->name : null) }}
                            </option>
                            @foreach($languages as $language)
                                <option value="{{ $language->id }}" data-image="{{ 'https://' . request()->getHost() . '/img/flags/' . $language->code . '.png' }}" {{ $user->language_id === $language->id ? 'selected' : '' }}>
                                    {{ translate($language->name) . (translate($language->name) != $language->name ? ' - ' . $language->name : null) }}
                                </option>
                            @endforeach
                        </select>
                    </p>
                </div>
            </div>


            <h3 class="mb-3">{{ translate('FODMAP settings') }}</h3>

                {{ translate('Select FODMAPs you are sensitive to.') }}
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Fructose</th>
                            <th scope="col">Lactose</th>
                            <th scope="col">Mannitol</th>
                            <th scope="col">Sorbitol</th>
                            <th scope="col">GOS</th>
                            <th scope="col">Fructan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input type="hidden" name="fodmaps[fructose]" value="0">
                                <input type="checkbox" name="fodmaps[fructose]" value="1" {{ $user->fodmap?->fructose ? 'checked' : '' }}>
                            </td>
                            <td>
                                <input type="hidden" name="fodmaps[lactose]" value="0">
                                <input type="checkbox" name="fodmaps[lactose]" value="1" {{ $user->fodmap?->lactose ? 'checked' : '' }}>
                            </td>
                            <td>
                                <input type="hidden" name="fodmaps[mannitol]" value="0">
                                <input type="checkbox" name="fodmaps[mannitol]" value="1" {{ $user->fodmap?->mannitol ? 'checked' : '' }}>
                            </td>
                            <td>
                                <input type="hidden" name="fodmaps[sorbitol]" value="0">
                                <input type="checkbox" name="fodmaps[sorbitol]" value="1" {{ $user->fodmap?->sorbitol ? 'checked' : '' }}>
                            </td>
                            <td>
                                <input type="hidden" name="fodmaps[GOS]" value="0">
                                <input type="checkbox" name="fodmaps[GOS]" value="1" {{ $user->fodmap?->GOS ? 'checked' : '' }}>
                            </td>
                            <td>
                                <input type="hidden" name="fodmaps[fructan]" value="0">
                                <input type="checkbox" name="fodmaps[fructan]" value="1" {{ $user->fodmap?->fructan ? 'checked' : '' }}>
                            </td>
                        </tr>
                    </tbody>
                </table>

            <h3 class="mb-3">{{ translate('Mailing settings') }}</h3>
            <p>{{ translate('You can choose to receive emails about new recipes, tips, and updates.') }}</p>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Mailing groups</th>
                        <th scope="col">Info</th>
                        <th scope="col">Subscribe</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($mailingGroups as $mailingGroup)
                        <tr>
                            <td>
                                {{ $mailingGroup->name }}
                            </td>
                            <td>
                                {{ $mailingGroup->description }}
                            </td>
                            <td>
                                <input type="checkbox" name="mailing_groups[]" value="{{ $mailingGroup->id }}" {{ $user->mailingGroups->contains('mailing_group_id', $mailingGroup->id) ? 'checked' : '' }}>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <button class="btn btn-primary" type="submit">{{ translate('Apply changes') }}</button>
        </div>
    </form>

    <script>
        $('#language-select').select2({
                templateResult: formatOption,
                templateSelection: formatOption
            });

            function formatOption(option) {
                if (!option.id) return option.text;

                var img = $(option.element).data('image');
                var text = option.text;

                return $(
                    `<span><img src="${img}" style="width: 25px; height: 25px; margin-right: 10px;" /> ${text}</span>`
                );
            }
    </script>
@endsection

