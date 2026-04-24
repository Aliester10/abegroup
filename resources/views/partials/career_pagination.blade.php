@if($paginator->hasPages())
<nav class="inline-flex items-center gap-1">
    {{-- Previous --}}
    @if($paginator->onFirstPage())
        <span class="w-10 h-10 flex items-center justify-center rounded-lg text-gray-300 cursor-not-allowed">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
        </span>
    @else
        <a href="{{ $paginator->previousPageUrl() }}" data-page="{{ $paginator->currentPage() - 1 }}"
           class="w-10 h-10 flex items-center justify-center rounded-lg text-gray-600 hover:bg-gray-100 border border-gray-200 transition-colors">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
        </a>
    @endif

    {{-- Pages --}}
    @foreach($paginator->getUrlRange(1, $paginator->lastPage()) as $page => $url)
        @if($page == $paginator->currentPage())
            <span class="w-10 h-10 flex items-center justify-center rounded-lg font-bold text-sm text-white"
                  style="background-color: #f37021;">{{ $page }}</span>
        @elseif($paginator->lastPage() > 7 && abs($page - $paginator->currentPage()) > 2 && $page != 1 && $page != $paginator->lastPage())
            @if($page == $paginator->currentPage() - 2 || $page == $paginator->currentPage() + 2)
                <span class="w-10 h-10 flex items-center justify-center text-gray-400 text-sm">…</span>
            @endif
        @else
            <a href="{{ $url }}" data-page="{{ $page }}"
               class="w-10 h-10 flex items-center justify-center rounded-lg text-gray-600 hover:bg-gray-100 font-medium text-sm border border-gray-200 transition-colors">
                {{ $page }}
            </a>
        @endif
    @endforeach

    {{-- Next --}}
    @if($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}" data-page="{{ $paginator->currentPage() + 1 }}"
           class="w-10 h-10 flex items-center justify-center rounded-lg text-gray-600 hover:bg-gray-100 border border-gray-200 transition-colors">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
        </a>
    @else
        <span class="w-10 h-10 flex items-center justify-center rounded-lg text-gray-300 cursor-not-allowed">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
        </span>
    @endif
</nav>
@endif
