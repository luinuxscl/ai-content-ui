@php
    $packageJson = json_decode(file_get_contents(base_path('package.json')), true);
    $version = str_replace(['^', '~', '>', '<', '='], '', $packageJson['devDependencies']['tailwindcss'] ?? 'N/A');
    $link = 'https://tailwindcss.com/docs/installation';
@endphp

<x-starter.app-stats name="PHP" version="{{ $version }}" link="{{ $link }}">
    <x-slot name="icon">
        <x-svg.tailwindcss size="32" />
    </x-slot>
</x-starter.app-stats>
