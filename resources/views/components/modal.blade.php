<div id="{{ $id ?? 'modal-'.uniqid() }}" {{ $attributes->merge([
    'class' => 'modal ' . ($class ?? ''),
    'tabindex' => '-1',
    'role' => 'dialog',
    'aria-labelledby' => ($id ?? 'modal') . '-title',
    'aria-hidden' => 'true'
]) }}>
    <div class="modal-dialog {{ $size ?? '' }}" role="document">
        <div class="modal-content">
            @if(isset($header))
                <div class="modal-header">
                    <h5 class="modal-title" id="{{ ($id ?? 'modal') . '-title' }}">{{ $title ?? '' }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
            @endif
            
            <div class="modal-body">
                {{ $slot }}
            </div>
            
            @if(isset($footer))
                <div class="modal-footer">
                    {{ $footer }}
                </div>
            @endif
        </div>
    </div>
</div>
