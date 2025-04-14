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

        <div class="container text-center">
            <div class="row align-items-start">
                <div class="col">

                    <!-- recipe search form -->
                    <form method="GET">
                        <div class="input-group mb-3">
                            <input type="text" name="search" class="form-control" placeholder="Search for recipes..."
                                value="{{ request('search') }}">
                            <button class="btn btn-outline-secondary" type="submit">Search</button>
                        </div>
                    </form>
                </div>
                <div class="col">

                    <!-- ingredient search form -->
                    <form method="GET" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group mb-3">
                            <select class="search-address form-control" id="change-add" name="recipe-ingredients[]" multiple="multiple"></select>
                            <button class="btn btn-outline-secondary" type="submit">Search</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <div>
            
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Thumbnail</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Area</th>
                </tr>
            </thead>
            <tbody> 
                @if(is_string($recipes))
                    <tr>
                        <td colspan="4" class="text-center">{{ $recipes }}</td>
                    </tr>
                @else
                    @foreach ($recipes as $recipe)
                        <tr>
                            <td>
                                <img src="{{ $recipe->thumbnail_url }}" alt="{{ $recipe->name }}" style="width: 100px; height: auto;">
                            </td>
                            <td>
                                <a href="{{ route('recipes.show', $recipe->id) }}">
                                    {{ $recipe->name }}
                                </a>
                            </td>    
                            <td>{{ $recipe->category() }}</td>
                            <td>{{ $recipe->area() }}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>

       <script type="text/javascript">
        var path = "{{ route('autocomplete') }}";

        $('#change-add').select2({
            placeholder: 'Select ingredients',
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
@endsection
