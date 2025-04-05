@props([
    'href' => null,
    'class' => '',
    'color' => 'default',
    'type' => 'button',
    'size' => 'md',
    'disabled' => false,
    'loading' => false
])

@php
    // Usar las nuevas clases CSS personalizadas para evitar problemas de purga
    // Establecemos las clases base
    $baseClass = 'ui-btn';
    
    // Clases de color
    $colorClass = "ui-btn-{$color}";
    
    // Clases de tamaño
    $sizeClass = "ui-btn-{$size}";
    
    // Combinamos todas las clases
    $classes = "$baseClass $colorClass $sizeClass $class";
@endphp

@if ($href)
    <a href="{{ $href }}" class="{{ $classes }}">{{ $slot }}</a>
@else
    <button 
        type="{{ $type }}" 
        class="{{ $classes }}"
        {{ $disabled ? 'disabled' : '' }}
    >
        @if ($loading)
            <svg class="spinner" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
        @endif
        {{ $slot }}
    </button>
@endif

{{-- 
    * Este componente utiliza clases CSS personalizadas definidas en:
    * resources/css/buttons.css
    *
    * Asegúrate de que este archivo esté incluido en tu compilación de assets
    * o importado en tu archivo principal de CSS.
--}}
