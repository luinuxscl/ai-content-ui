@props([
    'activeTab' => 1,
    'tabPosition' => 'top', // top, left
    'type' => 'default', // default, pills, underline
    'class' => '',
])
<div x-data="{ activeTab: {{ $activeTab }} }" class="{{ $class }}">
    @php
        $tabHeaderClass = 'flex ';
        $tabHeaderClass .=
            $tabPosition === 'left'
                ? 'flex-col space-y-2 mr-4'
                : 'flex-row space-x-2 mb-4 border-b border-gray-200 dark:border-gray-700';

        $tabItemBaseClass = 'px-4 py-2 text-small font-medium ';

        if ($type === 'default') {
            $tabItemBaseClass .= 'tab-item ';
            $tabItemActiveClass = 'tab-active ';
            $tabItemInactiveClass = 'tab-inactive ';
        } elseif ($type === 'pills') {
            $tabItemBaseClass .= 'rounded-lg tab-item ';
            $tabItemActiveClass = 'tab-active-pill ';
            $tabItemInactiveClass = 'tab-inactive-pill ';
        } elseif ($type === 'underline') {
            $tabItemBaseClass .= 'tab-item ';
            $tabItemActiveClass = 'tab-active-underline ';
            $tabItemInactiveClass = 'tab-inactive-underline ';
        }
    @endphp
    <div class="flex {{ $tabPosition === 'left' ? 'flex-row' : 'flex-col' }}">
        <!-- Cabeceras de las pestañas -->
        <div class="{{ $tabHeaderClass }}">
            {{ $tabHeaders }}
        </div>
        <!-- Contenido de las pestañas -->
        <div class="flex-grow">
            {{ $slot }}
        </div>
    </div>
</div>
