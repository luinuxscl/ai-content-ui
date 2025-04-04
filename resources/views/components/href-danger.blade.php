@props(['href', 'class' => ''])

<a href="{{ $href }}"
    class="inline-flex items-center px-4 py-2 bg-red-600 dark:bg-red-800 border border-red-300 dark:border-red-500 rounded-md font-semibold text-xs text-gray-100 dark:text-gray-100 uppercase tracking-widest shadow-xs hover:bg-red-500 dark:hover:bg-red-700 focus:outline-hidden focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-25 transition ease-in-out duration-150 cursor-pointer {{ $class }}">{{ $slot }}</a>
