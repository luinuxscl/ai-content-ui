@props(['class' => ''])
<h2 {{ $attributes->merge(['class' => 'text-title ' . $class]) }}>
    {{ $slot }}
</h2>
