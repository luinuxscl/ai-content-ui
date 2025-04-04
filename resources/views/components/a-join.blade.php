<a href="{{ route($route) }}"
    class="btn join-item  {{ $active
        ? 'bg-indigo-700 text-gray-200 dark:text-gray-100'
        : 'bg-transparent text-gray-900 dark:text-gray-100' }} {{ $class ?? '' }}"
    {{ $attributes }}>
    {{ $slot }}
    @if ($active && isset($title))
        <span class="ms-1">{{ $title }}</span>
    @endif
</a>
