@props(['href', 'class' => '', 'variant' => 'default'])
@php
    $variantClasses = [
        'default' => 'text-link',
        'danger' => 'text-red-600 dark:text-red-400 hover:text-red-700 dark:hover:text-red-300',
        'warning' => 'text-yellow-600 dark:text-yellow-400 hover:text-yellow-700 dark:hover:text-yellow-300',
        'nulled' => 'text-gray-600 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300',
        'info' => 'text-blue-600 dark:text-blue-400 hover:text-blue-700 dark:hover:text-blue-300',
        'success' => 'text-green-600 dark:text-green-400 hover:text-green-700 dark:hover:text-green-300',
        'secondary' => 'text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-gray-100',
    ];
    $classes = $variantClasses[$variant] . ' ' . $class;
@endphp
<a href="{{ $href }}" class="{{ $classes }}">
    {{ $slot }}
    @if ($variant === 'default')
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="icon-link">
            <path fill-rule="evenodd"
                d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z"
                clip-rule="evenodd" />
        </svg>
    @endif
</a>
