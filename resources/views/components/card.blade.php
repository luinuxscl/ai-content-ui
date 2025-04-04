@props([
    'title' => '',
    'actions' => null,
    'footer' => null,
    'class' => '',
    'padding' => 'box-panel',
    'rounded' => 'rounded-lg',
    'shadow' => 'shadow-md',
])

<div class="{{ $padding }} {{ $rounded }} {{ $shadow }} box-custom {{ $class }}">
    @if ($title || isset($actions))
        <div class="flex justify-between items-center mb-4">
            @if ($title)
                <h3 class="text-subtitle">{{ __($title) }}</h3>
            @endif

            @isset($actions)
                <div class="flex space-x-2">
                    {{ $actions }}
                </div>
            @endisset
        </div>
    @endif

    <div class="text-paragraph">
        {{ $slot }}
    </div>

    @if (isset($footer))
        <div class="mt-6 pt-4 border-t border-gray-200 dark:border-gray-700">
            {{ $footer }}
        </div>
    @endif
</div>
