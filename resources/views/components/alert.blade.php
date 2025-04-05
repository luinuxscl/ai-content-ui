@props(['type' => 'info', 'class' => ''])

@php
    $types = [
        'warning' => [
            'class' => 'alert-warning',
            'icon' => 'fa-triangle-exclamation',
            'defaultMessage' => __('Warning: Please check the information provided.'),
        ],
        'success' => [
            'class' => 'alert-success',
            'icon' => 'fa-check-circle',
            'defaultMessage' => __('Success: Operation completed successfully!'),
        ],
        'info' => [
            'class' => 'alert-info',
            'icon' => 'fa-info-circle',
            'defaultMessage' => __('Info: Please note the following information.'),
        ],
        'error' => [
            'class' => 'alert-danger',
            'icon' => 'fa-times-circle',
            'defaultMessage' => __('Error: An error occurred!'),
        ],
    ];

    $alertData = $types[$type] ?? $types['info'];
@endphp

<div role="alert" class="alert {{ $alertData['class'] }} {{ $class }}">
    <i class="fa-solid {{ $alertData['icon'] }}"></i>
    <span>{{ $slot->isEmpty() ? $alertData['defaultMessage'] : $slot }}</span>
</div>
