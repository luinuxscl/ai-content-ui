<div class="p-6 card starter-bg rounded-lg {{ $class ?? '' }}">
    @isset($title)
    <div class="flex justify-between mb-4 card-header">
        <div class="flex items-center">
            @isset($icon)
                {!! $icon !!}
            @endisset
            <h3 class="text-2xl starter-text-strong">{{ __($title) }}</h3>
        </div>
        
        @isset($actions)
            <div class="flex justify-end">
                {{ $actions }}
            </div>
        @endisset
    </div>
    @endisset

    <div class="starter-text">
        {{ $slot }}
    </div>

    @if (isset($footer))
        <div class="flex justify-end mt-6 card-footer">
            {{ $footer }}
        </div>
    @endif

</div>
