<div class="dropdown {{ $class ?? '' }}" x-data="{ open: false }">
    <button {{ $triggerAttributes ?? '' }} 
            class="dropdown-toggle {{ $triggerClass ?? '' }}" 
            @click="open = !open" 
            @click.away="open = false"
            type="button" 
            aria-haspopup="true" 
            :aria-expanded="open">
        {{ $trigger ?? 'Dropdown' }}
    </button>

    <div class="dropdown-menu {{ $menuClass ?? '' }}" 
         :class="{ 'show': open }" 
         x-show="open" 
         x-transition:enter="transition ease-out duration-100" 
         x-transition:enter-start="transform opacity-0 scale-95" 
         x-transition:enter-end="transform opacity-100 scale-100" 
         x-transition:leave="transition ease-in duration-75" 
         x-transition:leave-start="transform opacity-100 scale-100" 
         x-transition:leave-end="transform opacity-0 scale-95">
        {{ $slot }}
    </div>
</div>
