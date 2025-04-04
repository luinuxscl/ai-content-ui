@props(['class' => ''])
<p {{ $attributes->merge(['class' => 'text-small ' . $class]) }}>
    {{ $slot }}
</p>
