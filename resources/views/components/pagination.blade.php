@props(['paginator', 'onEachSide' => 2, 'class' => ''])

<nav role="navigation" aria-label="Navegación de paginación" class="flex justify-between items-center {{ $class }}">
    {{-- Información de paginación --}}
    <div class="text-small text-gray-700 dark:text-gray-400 hidden sm:block">
        Mostrando
        <span class="font-medium">{{ $paginator->firstItem() }}</span>
        a
        <span class="font-medium">{{ $paginator->lastItem() }}</span>
        de
        <span class="font-medium">{{ $paginator->total() }}</span>
        resultados
    </div>

    {{-- Links de paginación --}}
    <div>
        <ul class="flex items-center -space-x-px h-8 text-small">
            {{-- Botón anterior --}}
            @if ($paginator->onFirstPage())
                <li>
                    <span class="pagination-button-disabled rounded-l-lg">
                        <svg class="w-2.5 h-2.5 icon-feature" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Anterior</span>
                    </span>
                </li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" class="pagination-button rounded-l-lg">
                        <svg class="w-2.5 h-2.5 icon-feature" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Anterior</span>
                    </a>
                </li>
            @endif

            {{-- Links de número de página --}}
            @foreach ($paginator->getUrlRange(max(1, $paginator->currentPage() - $onEachSide), min($paginator->lastPage(), $paginator->currentPage() + $onEachSide)) as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li>
                        <span class="pagination-active">{{ $page }}</span>
                    </li>
                @else
                    <li>
                        <a href="{{ $url }}" class="pagination-button">{{ $page }}</a>
                    </li>
                @endif
            @endforeach

            {{-- Botón siguiente --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" class="pagination-button rounded-r-lg">
                        <svg class="w-2.5 h-2.5 icon-feature" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Siguiente</span>
                    </a>
                </li>
            @else
                <li>
                    <span class="pagination-button-disabled rounded-r-lg">
                        <svg class="w-2.5 h-2.5 icon-feature" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Siguiente</span>
                    </span>
                </li>
            @endif
        </ul>
    </div>
</nav>
