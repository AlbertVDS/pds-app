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

            .form-check-inline {
                display: inline-block;
                margin-right: 1rem;
            }
        </style>
@endsection

@section('content') 
            <p><a class="btn btn-primary" data-bs-toggle="collapse" href="#foodCollapse" role="button" aria-expanded="false"
                aria-controls="foodCollapse">
                {{ translate('Search and filters') }}
            </a>
            <form method="POST" enctype="multipart/form-data">
                @csrf
            @auth
                <div class="form-check">
                    @if($showTolerate)
                        <input class="form-check-input" type="checkbox" name="show-tolerate" value="1" id="show-tolerate" {{ $filterTolerance ? 'checked' : '' }}>
                        <label class="form-check-label" for="Fructose">
                            {{ translate('Show foods you can tolerate') }}{{ !$showTolerate ?? ' ' . translate('(set intolerance in your profile)') }}
                        </label>
                    @else
                        <input class="form-check-input" type="checkbox" id="fake-show-tolerate" disabled>
                        <label class="form-check-label" for="Fructose">
                            Show foods you can tolerate (set intolerance in your profile)
                        </label>
                    @endif
                </div>
            @endauth
            </p>
            <div class="collapse" id="foodCollapse">

                    <div class="card card-body">

                        <div class="row g-3 align-items-center">
                            <div class="col-auto">
                                <label for="recipeSearch" class="col-form-label">{{ translate('Food name') }}</label>
                            </div>
                            <div class="col-auto">
                                <input type="text" id="recipeSearch" name="search" class="form-control"
                                    placeholder="{{ translate('Search for recipes') }}..." value="{{ request('search') }}">
                            </div>
                        </div>

                        <div class="row g-3 align-items-center">
                            <div class="col-auto">
                                <label for="ingredient-select" class="col-form-label">{{ translate('Food types') }}</label>
                            </div>
                            <div class="col-auto">
                                <select class="search-address form-control" id="food-type-select" name="food-types[]"
                                    multiple="multiple">
                                    @foreach($foodSearch->foodTypes as $type)
                                        <option value="{{ $type->id }}" selected>{{ translate($type->name) }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="fodmaps[fructose]" value="1" id="Fructose" {{ isset($foodSearch->fodmaps['fructose']) ? 'checked' : '' }}>
                            <label class="form-check-label" for="Fructose">
                                Fructose
                            </label>            
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="fodmaps[lactose]" value="1" id="Lactose" {{ isset($foodSearch->fodmaps['lactose']) ? 'checked' : '' }}>
                            <label class="form-check-label" for="Lactose">
                                Lactose
                            </label>            
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="fodmaps[mannitol]" value="1" id="Mannitol" {{ isset($foodSearch->fodmaps['mannitol']) ? 'checked' : '' }}>
                            <label class="form-check-label" for="Mannitol">
                                Mannitol
                            </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="fodmaps[sorbitol]" value="1" id="Sorbitol" {{ isset($foodSearch->fodmaps['sorbitol']) ? 'checked' : '' }}>
                            <label class="form-check-label" for="Sorbitol">
                                Sorbitol
                            </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="fodmaps[GOS]" value="1" id="GOS" {{ isset($foodSearch->fodmaps['GOS']) ? 'checked' : '' }}>
                            <label class="form-check-label" for="GOS">
                                GOS
                            </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="fodmaps[fructan]" value="1" id="Fructan" {{ isset($foodSearch->fodmaps['fructan']) ? 'checked' : '' }}>
                            <label class="form-check-label" for="Fructan">
                                Fructan
                            </label>
                        </div>

                        <button class="btn btn-primary" type="submit">{{ translate('Search') }}</button>

                    </div>
                </form>
            </div>
            <div class="d-flex justify-content-between align-items-center mb-3">
                @can('isAdmin')
                    <a href="{{ route('foods.create') }}" class="btn btn-primary">{{ translate('Add Food') }}</a>
                @endcan

                {{ $foodSearch->foods->links() }}
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>{{ translate('Name') }}</th>
                        <th>{{ translate('Has substitutes') }}</th>
                        <th>{{ translate('Type') }}</th>
                        <th>{{ translate('Level') }}</th>
                        <th>{{ translate('Weight') }}</th>
                        <th>{{ translate('Fructose') }}</th>
                        <th>{{ translate('Lactose') }}</th>
                        <th>{{ translate('Mannitol') }}</th>
                        <th>{{ translate('Sorbitol') }}</th>
                        <th>{{ translate('GOS') }}</th>
                        <th>{{ translate('Fructan') }}</th>
                        @can('isAdmin')
                            <th>{{ translate('Actions') }}</th>
                        @endcan
                    </tr>
                </thead>
                <tbody>
                    @if($foodSearch->foods->isEmpty())
                        <tr>
                            <td colspan="{{ Gate::allows('is-admin') ? 12 : 11 }}" class="text-center">
                                {{ translate('No foods found') }}
                            </td>
                        </tr>
                    @else
                        @foreach ($foodSearch->foods as $food)
                            <tr>
                                <td>{{ $food->getName() }}</td>
                                <td>{{ $food->substitutes()->count() }}</td>
                                <td>{{ $food->foodType->name }}</td>
                                <td>{{ $food->level }}</td>
                                <td>{{ $food->weightText() }}</td>
                                <td>{{ $food->fructose }}</td>
                                <td>{{ $food->lactose }}</td>
                                <td>{{ $food->mannitol }}</td>
                                <td>{{ $food->sorbitol }}</td>
                                <td>{{ $food->GOS }}</td>
                                <td>{{ $food->fructan }}</td>
                                @can('isAdmin')
                                    <td class="content-left d-flex">
                                        <a href="{{ route('foods.edit', $food->id) }}" class="pe-1"><i class="fa-solid fa-pencil"></i></a>
                                        <form action={{ route('foods.destroy', $food->id) }} method="POST" class="d-flex">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-link p-0"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </form>
                                    </td>
                                @endcan
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
            <div class="d-flex justify-content-between align-items-center mb-3">
                @can('isAdmin')
                    <a href="{{ route('foods.create') }}" class="btn btn-primary">{{ translate('Add Food') }}</a>
                @endcan

                {{ $foodSearch->foods->links() }}
            </div>

            <script type="text/javascript">
                var path = "{{ route('food-type-autocomplete') }}";

                $('#food-type-select').select2({
                    placeholder: '{{ translate('Select a food type') }}',
                    ajax: {
                        url: path,
                        dataType: 'json',
                        delay: 250,
                        processResults: function (data) {
                            return {
                                results: $.map(data, function (item) {
                                    return {
                                        text: item.name,
                                        id: item.id
                                    }
                                })
                            };
                        },
                        cache: true
                    }
                });
            </script>

        <script>
            $(document).ready(function () {
                $('#show-tolerate').on('change', function () {
                    const checked = $(this).is(':checked');
                    const url = new URL(window.location.href);
                    const params = url.searchParams;

                    if (checked) {
                        params.set('filter-tolerance', 'true');
                    } else {
                        params.delete('filter-tolerance');
                    }

                    // Update URL and reload page
                    window.location.href = url.toString();
                });
            });
        </script>

    @if($showTolerate && request('filter-tolerance') !== 'true')
        <script>
            window.addEventListener('DOMContentLoaded', function () {
                const checkbox = document.getElementById('show-tolerate');
                if (checkbox && checkbox.checked) {
                    const url = new URL(window.location.href);
                    url.searchParams.set('filter-tolerance', 'true');
                    window.location.replace(url.toString());
                }
            });
        </script>
    @endif
@endsection