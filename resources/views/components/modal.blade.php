@props(['id' => 'modal-' . uniqid(), 'title' => '', 'size' => '', 'class' => ''])

<div id="{{ $id }}"
    {{ $attributes->merge([
        'class' => 'fixed inset-0 z-50 overflow-y-auto ' . $class,
        'tabindex' => '-1',
        'role' => 'dialog',
        'aria-labelledby' => $id . '-title',
        'aria-hidden' => 'true',
    ]) }}
    style="display: none;">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <!-- Fondo oscuro -->
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

        <!-- Centrar el contenido del modal -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

        <div
            class="inline-block align-bottom box-custom rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle {{ $size ? $size : 'sm:max-w-lg sm:w-full' }}">
            @if (isset($header))
                <div class="box-panel border-b border-gray-200 dark:border-gray-700">
                    <h3 class="text-subtitle" id="{{ $id . '-title' }}">
                        {{ $title }}</h3>
                    <button type="button" class="absolute top-4 right-4 text-gray-400 hover:text-gray-500"
                        onclick="document.getElementById('{{ $id }}').style.display='none'">
                        <span class="sr-only">Cerrar</span>
                        <svg class="h-6 w-6 icon-feature" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            @endif

            <div class="box-panel box-custom">
                <div class="text-paragraph">
                    {{ $slot }}
                </div>
            </div>

            @if (isset($footer))
                <div
                    class="box-panel bg-gray-50 dark:bg-gray-700 border-t border-gray-200 dark:border-gray-700 flex justify-end">
                    {{ $footer }}
                </div>
            @endif
        </div>
    </div>
</div>
