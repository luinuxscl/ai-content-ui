<form method="post">
    <div x-data="{
        value: @if ($wireModel) @entangle($wireModel).live @else '{{ $value }}' @endif,
        init() {
            // Inicialización con el valor actual
        }
    }" wire:ignore>
        <textarea id="{{ $id }}">{{ $value }}</textarea>
    </div>
</form>
