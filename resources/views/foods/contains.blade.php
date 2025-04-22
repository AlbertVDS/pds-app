<i class="fa-solid fa-square-{{ $hasFodmap ? 'xmark' : 'check' }} text-{{ $hasFodmap ? 'danger' : 'success' }}"
    data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip"
    data-bs-title="{{ $hasFodmap ? 'Contains' : 'Free/low ' }} {{ $name }}"></i>