@props(['id' => null, 'maxWidth' => 'md', 'title' => null, 'footer' => null, 'closeable' => true])

@php
$id = $id ?? uniqid('modal-');

$maxWidth = [
    'sm' => 'sm:max-w-sm',
    'md' => 'sm:max-w-md',
    'lg' => 'sm:max-w-lg',
    'xl' => 'sm:max-w-xl',
    '2xl' => 'sm:max-w-2xl',
    'full' => 'sm:max-w-full',
][$maxWidth];
@endphp

<div 
    {{ $attributes }}
    id="{{ $id }}"
    class="fixed inset-0 overflow-y-auto px-4 py-6 sm:px-0 z-50"
    style="display: none;"
    @if(isset($attributes['x-show']))
        x-on:keydown.escape.window="{{ $attributes['x-show'] }} = false"
    @endif
>
    <div 
        class="fixed inset-0 transform transition-all bg-overlay" 
        @if(isset($attributes['x-show']))
            x-show="{{ $attributes['x-show'] }}"
            x-on:click="{{ $closeable ? $attributes['x-show'] . ' = false' : '' }}"
        @endif
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
    >
        <div class="absolute inset-0 bg-gray-500 dark:bg-gray-900 opacity-75"></div>
    </div>

    <div 
        class="mb-6 bg-white dark:bg-gray-800 rounded-lg overflow-hidden shadow-xl transform transition-all sm:w-full {{ $maxWidth }} sm:mx-auto"
        @if(isset($attributes['x-show']))
            x-show="{{ $attributes['x-show'] }}"
        @endif
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
    >
        <!-- Modal Header -->
        @if($title || $closeable)
        <div class="px-6 py-4 bg-gray-50 dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700 flex justify-between items-center">
            @if($title)
                <h3 class="text-lg font-medium text-gray-900 dark:text-white">{{ $title }}</h3>
            @endif

            @if($closeable)
                <button 
                    type="button" 
                    class="text-gray-400 hover:text-gray-500 focus:outline-none"
                    @if(isset($attributes['@close']))
                        {{ $attributes['@close'] }}
                    @elseif(isset($attributes['x-show']))
                        @click="{{ $attributes['x-show'] }} = false"
                    @endif
                >
                    <span class="sr-only">Cerrar</span>
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            @endif
        </div>
        @endif

        <!-- Modal Content -->
        <div class="px-6 py-4">
            {{ $slot }}
        </div>

        <!-- Modal Footer -->
        @if($footer)
        <div class="px-6 py-4 bg-gray-50 dark:bg-gray-800 border-t border-gray-100 dark:border-gray-700">
            {{ $footer }}
        </div>
        @endif
    </div>
</div>
