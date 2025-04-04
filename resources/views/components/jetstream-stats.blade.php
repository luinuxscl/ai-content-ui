@php
    $packageJson = json_decode(file_get_contents(base_path('composer.json')), true);
    $version = str_replace(['^', '~', '>', '<', '='], '', $packageJson['require']['laravel/jetstream'] ?? 'N/A');
    $link = 'https://jetstream.laravel.com/introduction.html';
@endphp

<x-starter.app-stats name="Jetstream" version="{{ $version }}" link="{{ $link }}">
    <x-slot name="icon">
        <x-svg.laravel size="32" />
    </x-slot>
</x-starter.app-stats>
