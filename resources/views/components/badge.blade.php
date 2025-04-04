@props(['variant' => 'primary', 'size' => '', 'class' => ''])
@php
    $variantClasses = [
        'primary' => 'badge-primary',
        'secondary' => 'badge-secondary',
        'success' => 'badge-success',
        'warning' => 'badge-warning',
        'danger' => 'badge-danger',
        'info' => 'badge-info',
        'light' => 'badge-light',
        'dark' => 'badge-dark',
    ];

    $badgeClass = isset($variantClasses[$variant]) ? $variantClasses[$variant] : 'badge-primary';
@endphp

<span {{ $attributes->merge([
    'class' => 'badge-custom ' . $badgeClass . ' ' . $size . ' ' . $class,
]) }}>
    {{ $slot }}
</span>
