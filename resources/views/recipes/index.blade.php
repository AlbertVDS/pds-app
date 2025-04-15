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
        <p>
            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
                aria-controls="collapseExample">
                Search and filters
            </a>
        </p>
        <div class="collapse" id="collapseExample">
            <form method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card card-body">

                    <div class="row g-3 align-items-center">
                        <div class="col-auto">
                            <label for="recipeSearch" class="col-form-label">Recipe name</label>
                        </div>
                        <div class="col-auto">
                            <input type="text" id="recipeSearch" name="search" class="form-control" placeholder="Search for recipes..."
                                value="{{ request('search') }}">
                        </div>
                    </div>

                    <div class="row g-3 align-items-center">
                        <div class="col-auto">
                            <label for="ingredient-select" class="col-form-label">Ingredients</label>
                        </div>
                        <div class="col-auto">                            
                            <select class="search-address form-control" id="ingredient-select" name="recipe-ingredients[]" multiple="multiple">
                                @foreach($recipeIngredients as $ingredient)
                                    <option value="{{ $ingredient->id }}" selected>{{ $ingredient->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row g-3 align-items-center">
                        <div class="col-auto">
                            <label for="tag-select" class="col-form-label">Tags</label>
                        </div>
                        <div class="col-auto">
                            <select class="search-address form-control" id="tag-select" name="recipe-tags[]" multiple="multiple">
                                @foreach ($recipeTags as $tag)
                                    <option value="{{ $tag->id }}" selected>{{ $tag->name }}</option>                                    
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row g-3 align-items-center">
                        <div class="col-auto">
                            <label for="area-select" class="col-form-label">Area</label>
                        </div>
                        <div class="col-auto">
                            <select class="search-address form-control" id="area-select" name="recipe-areas[]" multiple="multiple">
                                @foreach($recipeAreas as $area)
                                    <option value="{{ $area->id }}" selected>{{ $area->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row g-3 align-items-center">
                        <div class="col-auto">
                            <label for="category-select" class="col-form-label">Categories</label>
                        </div>
                        <div class="col-auto">
                            <select class="search-address form-control" id="category-select" name="recipe-categories[]" multiple="multiple">
                                @foreach($recipeCategories as $category)
                                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <button class="btn btn-primary" type="submit">Search</button>

                </div>
            </form>
        </div>

        <div class="d-flex justify-content-between align-items-center">
            {{ $recipes->links() }}
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
                                </a><br>
                                {{ $recipe->tagNames }}
                            </td>
                            <td>{{ $recipe->category() }}</td>
                            <td>{{ $recipe->area() }}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>

        <div class="d-flex justify-content-between align-items-center mb-3">
            {{ $recipes->links() }}
        </div>

       <script type="text/javascript">
            var path = "{{ route('ingredient-autocomplete') }}";

            $('#ingredient-select').select2({
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

        <script type="text/javascript">
            var path = "{{ route('tag-autocomplete') }}";

            $('#tag-select').select2({
                placeholder: 'Select tags',
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

        <script type="text/javascript">
            var path = "{{ route('area-autocomplete') }}";

            $('#area-select').select2({
                placeholder: 'Select area',
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

        <script type="text/javascript">
            var path = "{{ route('category-autocomplete') }}";

            $('#category-select').select2({
                placeholder: 'Select categories',
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
