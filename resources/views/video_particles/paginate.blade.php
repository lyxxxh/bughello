@if ($paginator->hasPages())
    <nav>

        <ul class="stui-page text-center cleafix">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled" aria-disabled="true" aria-label="('pagination.previous')">
                    <span aria-hidden="true">&lsaquo;</span>
                </li>
            @else
                <li>
                    <a href="{{ $prefix.$paginator->previousPageUrl() }}" rel="prev" aria-label="('pagination.previous')">&lsaquo;</a>
                </li>
            @endif

            @inject('paginateService','App\Service\Paginate')
            {{-- Pagination Elements --}}
            @foreach ($paginateService->elements($paginator) as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active" aria-current="page"><a href="{{ $prefix.$url }}">{{ $page }}</a></li>
                        @else
                            <li><a href="{{ $prefix.$url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $prefix.$paginator->nextPageUrl() }}" rel="next" aria-label="('pagination.next')">&rsaquo;</a>
                </li>
            @else
                <li class="disabled" aria-disabled="true" aria-label="('pagination.next')">
                    <span aria-hidden="true">&rsaquo;</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
