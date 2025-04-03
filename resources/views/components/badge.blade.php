<span {{ $attributes->merge([
    'class' => 'badge ' . ($variant ?? 'badge-primary') . ' ' . ($size ?? '') . ' ' . ($class ?? '')
]) }}>
    {{ $slot }}
</span>
