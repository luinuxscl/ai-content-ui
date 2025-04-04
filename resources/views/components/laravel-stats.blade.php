@php
    $version = str_replace(['^', '~', '>', '<', '='], '', Illuminate\Foundation\Application::VERSION ?? 'N/A');
    $version_major = explode('.', Illuminate\Foundation\Application::VERSION)[0];
    $link = 'https://laravel.com/docs/' . $version_major . '.x';
@endphp

<x-starter.app-stats name="Laravel" version="{{ $version }}" link="{{ $link }}">
    <x-slot name="icon">
        <x-svg.laravel size="32" />
    </x-slot>
</x-starter.app-stats>
