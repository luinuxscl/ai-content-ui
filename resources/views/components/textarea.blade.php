@props([
    'name' => '',
    'id' => null,
    'label' => null,
    'error' => null,
    'hint' => null,
    'optional' => false,
    'class' => '',
    'size' => '',
    'hasError' => false,
    'disabled' => false,
])

<div class="form-control w-full {{ $class }}">
    @if (isset($label))
        <label for="{{ $id ?? $name }}" class="label text-subtitle">
            <span class="label-text">{{ $label }}</span>
            @if ($optional)
                <span class="label-text-alt text-small">(Opcional)</span>
            @endif
        </label>
    @endif

    <textarea id="{{ $id ?? $name }}" name="{{ $name }}" {{ $disabled ? 'disabled' : '' }}
        {{ $attributes->merge([
            'class' => 'textarea-custom w-full ' . ($hasError ? 'textarea-error' : '') . ' ' . $size,
        ]) }}>{{ $slot }}</textarea>

    @if (isset($error))
        <label class="label">
            <span class="label-text-alt text-error text-small">{{ $error }}</span>
        </label>
    @endif

    @if (isset($hint))
        <label class="label">
            <span class="label-text-alt text-small">{{ $hint }}</span>
        </label>
    @endif
</div>
