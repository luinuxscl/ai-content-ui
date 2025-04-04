@props([
    'tab' => 1,
    'class' => '',
])
<div x-show="activeTab === {{ $tab }}" x-transition:enter="transition ease-out duration-200"
    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0" class="tab-content {{ $class }}" role="tabpanel">
    <div class="text-paragraph">
        {{ $slot }}
    </div>
</div>
