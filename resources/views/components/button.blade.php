@props(['href' => null, 'class' => '', 'color' => 'default', 'variant' => 'default', 'type' => 'button', 'size' => 'md', 'disabled' => false, 'loading' => false])

@php
    $baseClasses =
        'inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs uppercase tracking-widest focus:outline-hidden focus:ring-2 focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150 cursor-pointer';

    $colorClasses = [
        'default' =>
            'bg-gray-800 dark:bg-gray-200 text-white dark:text-gray-800 hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800',
        'primary' =>
            'bg-indigo-600 dark:bg-indigo-500 text-white hover:bg-indigo-700 dark:hover:bg-indigo-600 focus:bg-indigo-700 dark:focus:bg-indigo-600 active:bg-indigo-800 dark:active:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800',
        'danger' =>
            'bg-red-600 dark:bg-red-500 text-white hover:bg-red-700 dark:hover:bg-red-600 focus:bg-red-700 dark:focus:bg-red-600 active:bg-red-800 dark:active:bg-red-700 focus:ring-red-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800',
        'warning' =>
            'bg-yellow-500 dark:bg-yellow-400 text-white dark:text-gray-800 hover:bg-yellow-600 dark:hover:bg-yellow-500 focus:bg-yellow-600 dark:focus:bg-yellow-500 active:bg-yellow-700 dark:active:bg-yellow-600 focus:ring-yellow-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800',
        'nulled' =>
            'bg-gray-500 dark:bg-gray-400 text-white dark:text-gray-800 hover:bg-gray-600 dark:hover:bg-gray-500 focus:bg-gray-600 dark:focus:bg-gray-500 active:bg-gray-700 dark:active:bg-gray-600 focus:ring-gray-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800',
        'info' =>
            'bg-blue-500 dark:bg-blue-400 text-white dark:text-gray-800 hover:bg-blue-600 dark:hover:bg-blue-500 focus:bg-blue-600 dark:focus:bg-blue-500 active:bg-blue-700 dark:active:bg-blue-600 focus:ring-blue-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800',
        'success' =>
            'bg-green-500 dark:bg-green-400 text-white dark:text-gray-800 hover:bg-green-600 dark:hover:bg-green-500 focus:bg-green-600 dark:focus:bg-green-500 active:bg-green-700 dark:active:bg-green-600 focus:ring-green-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800',
        'secondary' =>
            'bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-500 text-gray-700 dark:text-gray-300 shadow-xs hover:bg-gray-50 dark:hover:bg-gray-700 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 me-2',
    ];

    // Para compatibilidad con versiones anteriores, usamos 'color' pero seguimos admitiendo 'variant'
    $selectedColor = $color !== 'default' ? $color : $variant;
    
    $sizeClasses = [
        'xs' => 'px-2 py-1 text-xs',
        'sm' => 'px-3 py-1.5 text-sm',
        'md' => 'px-4 py-2 text-sm',
        'lg' => 'px-5 py-2.5 text-base',
        'xl' => 'px-6 py-3 text-base'
    ][$size];
    
    $classes = "{$baseClasses} {$colorClasses[$selectedColor]} {$sizeClasses} {$class}";
@endphp

@if ($href)
    <a href="{{ $href }}" class="{{ $classes }}">{{ $slot }}</a>
@else
    <button type="{{ $type }}" class="{{ $classes }}" {{ $disabled ? 'disabled' : '' }}>
    @if ($loading)
    <svg class="animate-spin -ml-1 mr-2 h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
    </svg>
    @endif
    {{ $slot }}
</button>
@endif
