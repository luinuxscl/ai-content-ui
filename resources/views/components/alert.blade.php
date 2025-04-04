@props([
    'variant' => 'info',
    'title' => null,
    'icon' => null,
    'dismissible' => false,
    'class' => '',
])
@php
    $variantClasses = [
        'info' =>
            'bg-blue-50 border-blue-300 text-blue-800 dark:bg-blue-900/50 dark:border-blue-800 dark:text-blue-300',
        'success' =>
            'bg-green-50 border-green-300 text-green-800 dark:bg-green-900/50 dark:border-green-800 dark:text-green-300',
        'warning' =>
            'bg-yellow-50 border-yellow-300 text-yellow-800 dark:bg-yellow-900/50 dark:border-yellow-800 dark:text-yellow-300',
        'danger' => 'bg-red-50 border-red-300 text-red-800 dark:bg-red-900/50 dark:border-red-800 dark:text-red-300',
    ];
    $iconClasses = [
        'info' => 'text-blue-500 dark:text-blue-400',
        'success' => 'text-green-500 dark:text-green-400',
        'warning' => 'text-yellow-500 dark:text-yellow-400',
        'danger' => 'text-red-500 dark:text-red-400',
    ];
@endphp
<div
    {{ $attributes->merge([
        'class' => 'flex items-start p-4 mb-4 border rounded-lg ' . $variantClasses[$variant] . ' ' . $class,
        'role' => 'alert',
    ]) }}>
    @if ($icon)
        <div class="flex-shrink-0 mr-3">
            <i class="{{ $icon }} {{ $iconClasses[$variant] }} icon-feature"></i>
        </div>
    @endif
    <div class="flex-grow">
        @if ($title)
            <h4 class="mb-1 font-medium text-subtitle">{{ $title }}</h4>
        @endif
        <div class="text-paragraph">
            {{ $slot }}
        </div>
    </div>
    @if ($dismissible)
        <button type="button"
            class="ml-auto -mx-1.5 -my-1.5 p-1.5 rounded-lg focus:ring-2 focus:ring-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 inline-flex items-center justify-center h-8 w-8"
            onclick="this.parentElement.remove()" aria-label="Cerrar">
            <span class="sr-only">Cerrar</span>
            <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
        </button>
    @endif
</div>
