@if ($paginator->hasPages())
  <div class="pagination__wrap">
    <ul class="list-wrap">
      {{-- Previous Page Link --}}

      @if ($paginator->onFirstPage())
        <li class="active">
          <a href="#"><i class="fas fa-angle-double-left"></i></a>
        </li>
      @else
        <li>
          <a href="{{ $paginator->previousPageUrl() }}" rel="previous"><i class="fas fa-angle-double-left"></i></a>
        </li>
      @endif
      {{-- Next Page Link --}}
      @if ($paginator->hasMorePages())
        <li>
          <a href="{{ $paginator->nextPageUrl() }}" rel="next"><i class="fas fa-angle-double-right"></i></a>
        </li>
      @else
        <li class="active">
          <a href="#"><i class="fas fa-angle-double-right"></i></a>
        </li>
      @endif

    </ul>
  </div>
@endif
