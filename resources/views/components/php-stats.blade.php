@php
    $packageJson = json_decode(file_get_contents(base_path('composer.json')), true);
    $version = str_replace(['^', '~', '>', '<', '='], '', $packageJson['require']['php'] ?? 'N/A');
    $link = 'https://www.php.net/manual/es/';
@endphp

<x-starter.app-stats name="PHP" version="{{ $version }}" link="{{ $link }}">
    <x-slot name="icon">
        <x-svg.php size="45" />
    </x-slot>
</x-starter.app-stats>
