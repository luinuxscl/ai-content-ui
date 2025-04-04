<footer class="bg-white dark:bg-gray-800 shadow mt-auto">
    <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8 text-center">
        <div class="text-gray-700 dark:text-gray-300">
            © {{ date('Y') }} {{ config('app.name', 'Laravel') }}. {{ __('All rights reserved') }}.
        </div>
        @role(['admin', 'root'])
            <div class="text-sm text-gray-500 dark:text-gray-400">
                <x-starter.github />
            </div>
        @endrole
    </div>
</footer>
