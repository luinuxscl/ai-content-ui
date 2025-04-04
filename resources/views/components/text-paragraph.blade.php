@props(['class' => ''])
<p {{ $attributes->merge(['class' => 'text-paragraph ' . $class]) }}>
    {{ $slot }}
</p>
