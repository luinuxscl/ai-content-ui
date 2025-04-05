@props([
    'color' => 'default',
    'size' => 'md',
    'rounded' => 'default',
])

@php
$baseClasses = 'inline-flex items-center justify-center font-medium';

$colorClasses = [
    'default' => 'bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-300',
    'primary' => 'bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-300',
    'secondary' => 'bg-purple-100 text-purple-800 dark:bg-purple-900 dark:text-purple-300',
    'success' => 'bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-300',
    'danger' => 'bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-300',
    'warning' => 'bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-300',
    'info' => 'bg-sky-100 text-sky-800 dark:bg-sky-900 dark:text-sky-300',
][$color];

$sizeClasses = [
    'xs' => 'text-xs px-1.5 py-0.5',
    'sm' => 'text-xs px-2 py-1',
    'md' => 'text-sm px-2.5 py-1',
    'lg' => 'text-base px-3 py-1.5',
][$size];

$roundedClasses = [
    'none' => 'rounded-none',
    'default' => 'rounded-md',
    'full' => 'rounded-full',
][$rounded];

$classes = "{$baseClasses} {$colorClasses} {$sizeClasses} {$roundedClasses}";
@endphp

<span {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</span>
