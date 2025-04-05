@props(['wireModel' => null])

@php
    // Generamos un ID único para este editor
    $id = 'tinymce-' . uniqid();
    // Obtenemos cualquier valor inicial que pueda existir
    $initialValue = $attributes->get('value', '');
@endphp

<div wire:ignore>
    <textarea id="{{ $id }}" {!! $attributes->whereDoesntStartWith('wire:model') !!}>{{ $initialValue }}</textarea>

    <script>
        document.addEventListener('livewire:initialized', () => {
            // Inicializar TinyMCE con Livewire
            if (window.initTinymceWithLivewire) {
                window.initTinymceWithLivewire('{{ $id }}', '{{ $_instance->getId() }}',
                    '{{ $wireModel }}');
            } else {
                console.error('La función initTinymceWithLivewire no está disponible');
            }

            // Escuchar cambios en el modelo y actualizar el editor si es necesario
            @this.on('tinymce:sync:{{ str_replace('.', '-', $wireModel) }}', (value) => {
                if (tinymce.get('{{ $id }}')) {
                    const editor = tinymce.get('{{ $id }}');
                    if (editor.getContent() !== value) {
                        editor.setContent(value || '');
                    }
                }
            });
        });
    </script>
</div>
