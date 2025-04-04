@props(['class' => ''])
<h3 {{ $attributes->merge(['class' => 'text-subtitle ' . $class]) }}>
    {{ $slot }}
</h3>
