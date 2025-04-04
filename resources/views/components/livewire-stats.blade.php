@php
    $packageJson = json_decode(file_get_contents(base_path('composer.json')), true);
    $version = str_replace(['^', '~', '>', '<', '='], '', $packageJson['require']['livewire/livewire'] ?? 'N/A');
    $link = 'https://livewire.laravel.com/docs/quickstart';
@endphp

<x-starter.app-stats name="Livewire" version="{{ $version }}" link="{{ $link }}">
    <x-slot name="icon">
        <x-svg.livewire size="32" />
    </x-slot>
</x-starter.app-stats>
