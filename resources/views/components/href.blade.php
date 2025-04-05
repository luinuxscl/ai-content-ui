@props(['href', 'class' => '', 'variant' => 'default'])

@php
    $baseClasses =
        'inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs uppercase tracking-widest focus:outline-hidden focus:ring-2 focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150 cursor-pointer';

    $variantClasses = [
        'default' =>
            'bg-gray-800 dark:bg-gray-200 text-white dark:text-gray-800 hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800',
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

    $classes = $baseClasses . ' ' . $variantClasses[$variant] . ' ' . $class;
@endphp

<a href="{{ $href }}" class="{{ $classes }}">{{ $slot }}</a>
