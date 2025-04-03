<div {{ $attributes->merge([
    'class' => 'alert ' . ($variant ?? 'alert-info') . ' ' . ($class ?? ''),
    'role' => 'alert'
]) }}>
    @if(isset($icon))
        <div class="alert-icon">
            <i class="{{ $icon }}"></i>
        </div>
    @endif
    
    <div class="alert-content">
        @if(isset($title))
            <h4 class="alert-title">{{ $title }}</h4>
        @endif
        <div class="alert-description">
            {{ $slot }}
        </div>
    </div>
    
    @if(isset($dismissible) && $dismissible)
        <button type="button" class="alert-close" data-dismiss="alert" aria-label="Cerrar">
            <span aria-hidden="true">&times;</span>
        </button>
    @endif
</div>
