@if ($paginator->hasPages())
    <ul class="flex flex-wrap space-x-1 pt-3">

        @if ($paginator->onFirstPage())
            <li class="h-8 px-3 py-2 text-gray-600 border bg-slate-100 rounded">
                <span class="" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </span>
            </li>
        @else
            <li class="h-8 px-3 py-2 text-gray-600 border shadow rounded hover:shadow-md">
                <a class="" href="{{ $paginator->previousPageUrl() }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </a>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="h-8 px-4 py-2 text-gray-600 border bg-slate-100 rounded"><span
                        class="page-link">{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="h-8 px-4 py-1 text-gray-600 border bg-slate-100 rounded"><span
                                class="page-link">{{ $page }}</span></li>
                    @else
                        <li class="inline-block h-8 px-4 py-1 text-gray-600 border shadow rounded hover:shadow-md"><a
                                class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="h-8 px-3 py-2 text-gray-600 border shadow rounded hover:shadow-md">
                <a class="page-link" href="{{ $paginator->nextPageUrl() }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </li>
        @else
            <li class="h-8 px-3 py-2 text-gray-600 border bg-slate-100 shadow rounded">
                <span class="page-link" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </span>
            </li>
        @endif
    </ul>
@endif
