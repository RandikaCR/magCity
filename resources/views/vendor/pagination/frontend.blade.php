@if ($paginator->hasPages())
    <div class="pagination-bx clearfix m-b30">
        <ul class="pagination">
            @if ($paginator->onFirstPage())
                <li class="previous"><a href="javascript:void(0);"><i class="fas fa-angle-double-left"></i></a></li>
            @else
                <li class="previous"><a href="{{ $paginator->previousPageUrl() }}"><i class="fas fa-angle-double-left"></i></a></li>
            @endif

            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li><a href="javascript:void(0);">{{ $element }}</a></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active"><a href="javascript:void(0);">{{ $page }}</a></li>
                        @else
                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach


            @if ($paginator->hasMorePages())
                <li class="next"><a href="{{ $paginator->nextPageUrl() }}"><i class="fas fa-angle-double-right"></i></a></li>
            @else
                <li class="next"><a href="javascript:void(0);"><i class="fas fa-angle-double-right"></i></a></li>
            @endif
        </ul>
    </div>

@endif
