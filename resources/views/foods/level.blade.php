@php
    $color = ['success', 'warning', 'danger'];
    $label = [ translate('Low'),  translate('Moderate'),  translate('High')];
@endphp
<i class="fa-solid fa-square text-{{ $color[$level] }}" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip"
    data-bs-title="{{ $label[$level] }}"></i>