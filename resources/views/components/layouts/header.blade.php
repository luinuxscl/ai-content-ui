@props(['title', 'icon', 'buttons'])
<header class="bg-white shadow-sm dark:bg-gray-800">
    <div class="relative flex items-center justify-between px-4 py-6 mx-auto overflow-hidden max-w-7xl sm:px-6 lg:px-8">
        <div class="z-10 flex items-center align-middle">
            @isset($icon)
                <div class="text-3xl text-gray-800 dark:text-gray-300 me-3 ">
                    {!! $icon !!}
                </div>
            @endisset

            {{-- Separar mas cada letra --}}
            <h2 class="text-4xl font-bold text-gray-800 dark:text-gray-300">
                {{ __($title ?? '') }}
            </h2>
        </div>


        @isset($buttons)
            <div class="z-10 flex items-center">
                {!! $buttons !!}
            </div>
        @endisset

        <div
            class="absolute inset-0 z-0 font-bold text-gray-300 lowercase right-3 -top-3 opacity-40 text-9xl dark:text-gray-900">
            {{ __($title ?? '') }}
        </div>
    </div>
</header>
