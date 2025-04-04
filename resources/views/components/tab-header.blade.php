@props([
    'tab' => 1,
    'label' => '',
    'icon' => null,
])

@php
    $parentTabType = $type ?? 'default';
    $parentTabPosition = $tabPosition ?? 'top';
    $tabItemBaseClass = 'px-4 py-2 text-small font-medium cursor-pointer ';

    if ($parentTabType === 'default') {
        $tabItemBaseClass .= 'tab-item ';
        $tabItemActiveClass = 'tab-active ';
        $tabItemInactiveClass = 'tab-inactive ';
    } elseif ($parentTabType === 'pills') {
        $tabItemBaseClass .= 'rounded-lg tab-item ';
        $tabItemActiveClass = 'tab-active-pill ';
        $tabItemInactiveClass = 'tab-inactive-pill ';
    } elseif ($parentTabType === 'underline') {
        $tabItemBaseClass .= 'tab-item ';
        $tabItemActiveClass = 'tab-active-underline ';
        $tabItemInactiveClass = 'tab-inactive-underline ';
    }
@endphp

<button type="button" @click="activeTab = {{ $tab }}"
    :class="[
        '{{ $tabItemBaseClass }}',
        activeTab === {{ $tab }} ? '{{ $tabItemActiveClass }}' : '{{ $tabItemInactiveClass }}'
    ]"
    :aria-selected="activeTab === {{ $tab }}" role="tab">
    @if ($icon)
        <i class="{{ $icon }} mr-1 icon-feature"></i>
    @endif
    {{ $label }}
</button>
