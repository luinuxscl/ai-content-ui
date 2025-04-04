@props([
    'id' => 'toast-' . uniqid(),
    'type' => 'success', // success, info, warning, danger
    'position' => 'top-right', // top-left, top-center, top-right, bottom-left, bottom-center, bottom-right
    'autoClose' => true,
    'autoCloseDelay' => 5000, // en milisegundos
    'title' => null,
    'message' => '',
    'dismissible' => true,
    'icon' => null,
    'class' => '',
])

@php
    // Definir las clases según el tipo de toast
    $typeClasses = [
        'success' => 'toast-success',
        'info' => 'toast-info',
        'warning' => 'toast-warning',
        'danger' => 'toast-danger',
    ];

    $iconClasses = [
        'success' => 'text-green-500 dark:text-green-400',
        'info' => 'text-blue-500 dark:text-blue-400',
        'warning' => 'text-yellow-500 dark:text-yellow-400',
        'danger' => 'text-red-500 dark:text-red-400',
    ];

    // Predeterminados basados en tipo
    $defaultIcons = [
        'success' =>
            '<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>',
        'info' =>
            '<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>',
        'warning' =>
            '<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>',
        'danger' =>
            '<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>',
    ];

    // Clases de posición
    $positionClasses = [
        'top-left' => 'fixed top-4 left-4',
        'top-center' => 'fixed top-4 left-1/2 transform -translate-x-1/2',
        'top-right' => 'fixed top-4 right-4',
        'bottom-left' => 'fixed bottom-4 left-4',
        'bottom-center' => 'fixed bottom-4 left-1/2 transform -translate-x-1/2',
        'bottom-right' => 'fixed bottom-4 right-4',
    ];
@endphp

<div id="{{ $id }}" x-data="{
    show: true,
    autoClose: {{ $autoClose ? 'true' : 'false' }},
    autoCloseDelay: {{ $autoCloseDelay }},
    init() {
        if (this.autoClose) {
            setTimeout(() => {
                this.show = false;
                setTimeout(() => {
                    document.getElementById('{{ $id }}').remove();
                }, 300);
            }, this.autoCloseDelay);
        }
    }
}" x-show="show" x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 transform translate-y-2"
    x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100 transform translate-y-0"
    x-transition:leave-end="opacity-0 transform translate-y-2"
    class="{{ $positionClasses[$position] }} toast-custom {{ $typeClasses[$type] }} {{ $class }} z-50"
    role="alert">
    @if ($icon)
        <div class="flex-shrink-0 mr-3 icon-feature {{ $iconClasses[$type] }}">
            <i class="{{ $icon }}"></i>
        </div>
    @elseif(isset($defaultIcons[$type]))
        <div class="flex-shrink-0 mr-3 icon-feature {{ $iconClasses[$type] }}">
            {!! $defaultIcons[$type] !!}
        </div>
    @endif

    <div class="flex-grow">
        @if ($title)
            <h4 class="mb-1 font-medium text-subtitle">{{ $title }}</h4>
        @endif
        <div class="text-paragraph">
            {{ $message }}
            {{ $slot }}
        </div>
    </div>

    @if ($dismissible)
        <button type="button"
            class="ml-auto -mx-1.5 -my-1.5 p-1.5 rounded-lg focus:ring-2 focus:ring-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 inline-flex items-center justify-center h-8 w-8"
            @click="show = false; setTimeout(() => document.getElementById('{{ $id }}').remove(), 300);"
            aria-label="Cerrar">
            <span class="sr-only">Cerrar</span>
            <svg class="w-3 h-3 icon-feature" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
        </button>
    @endif
</div>
