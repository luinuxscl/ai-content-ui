<div class="stat">
    <div class="stat-figure text-secondary">
        {{ $icon }}
    </div>
    <div class="stat-title text-black dark:text-white font-semibold text-sm">{{ $name }}</div>
    <div class="stat-value text-black dark:text-white">{{ $version }}</div>
    <div class="stat-desc text-black dark:text-white"> <a href="{{ $link }}" target="_blank"
            rel="noopener noreferrer">
            <i class="fa-solid fa-book"></i>
            <span class="ml-1">{{ __('Documentation') }}</span>
        </a>
    </div>
</div>
