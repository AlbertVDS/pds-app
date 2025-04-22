@extends('layout-parts.main')

@section('head')
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <style>
            .fa-spinner {
                animation: spin 1s linear infinite;
            }

            @keyframes spin {
                0% { transform: rotate(0deg); }
                100% { transform: rotate(360deg); }
            }
        </style>
@endsection

@section('content')
    <div class="d-flex justify-content-between align-items-center">
        {{ $ingredients->links() }}
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Ingredient</th>
                <th>Food</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ingredients as $ingredient)
                <tr>
                    <td>{{ $ingredient->name }}</td>
                    <td>
                        <select class="select2" ingredient-id="{{ $ingredient->id }}" multiple="multiple">
                        @foreach($ingredient->foods() as $food)
                            <option value="{{ $food->id }}" selected>
                                {{ $food->name }}
                            </option>
                        @endforeach
                        </select>
                    </td>
                    <td>
                        <button class="submit-food btn disabled" id="{{ $ingredient->id }}">Submit</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script>
        var path = "{{ route('food-autocomplete') }}";

        $(document).ready(function() {
            $('.select2').select2({
                placeholder: 'Select a food',
                allowClear: true,
                width: '100%',
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

            $('.select2').on('change', function() {
                console.log($(this).attr('ingredient-id'));
                var id = $(this).attr('ingredient-id');
                $('#'+id).removeClass('disabled');
                $('#'+id).addClass('btn-primary');
                $('#'+id).html('Submit');
            });

            $('.submit-food').on('click', function() {
                var id = $(this).attr('id');
                var selectedFoods = $(this).closest('tr').find('.select2').val();

                $(this).removeClass('btn-primary');
                $(this).html('<i class="fa-solid fa-spinner"></i>');

                $.ajax({
                    url: '{{ route('save-linked-foods') }}',
                    type: 'POST',
                    data: {
                        ingredient_id: id,
                        food_ids: selectedFoods,
                        _token: "{{ csrf_token() }}",
                    },
                    success: function (response) {
                        console.log(response.message);
                        $('#'+id).html('<i class="fa-solid fa-check"></i>');
                        $('#'+id).addClass('disabled');
                    },
                    error: function (xhr, status, error) {
                        console.error('Error:', error);
                    }
                });
            });
        });
    </script>

    <div class="d-flex justify-content-between align-items-center">
        {{ $ingredients->links() }}
    </div>
@endsection
