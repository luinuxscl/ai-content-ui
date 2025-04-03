<button {{ $attributes->merge([
    'type' => 'button',
    'class' => 'btn ' . ($variant ?? 'btn-primary') . ' ' . ($size ?? '') . ' ' . ($class ?? '')
]) }}>
    @if(isset($icon) && $position !== 'right')
        <span class="mr-1">
            <i class="{{ $icon }}"></i>
        </span>
    @endif
    
    {{ $slot }}
    
    @if(isset($icon) && $position === 'right')
        <span class="ml-1">
            <i class="{{ $icon }}"></i>
        </span>
    @endif
</button>
