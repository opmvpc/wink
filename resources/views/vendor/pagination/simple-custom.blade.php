@if ($paginator->hasPages())
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
        <a class="btn btn-primary float-left disabled" href="#">@lang('pagination.previous')</a>
    @else
        <a class="btn btn-primary float-left" href="{{ $paginator->previousPageUrl() }}">@lang('pagination.previous')</a>
    @endif

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
        <a class="btn btn-primary float-right" href="{{ $paginator->nextPageUrl() }}">@lang('pagination.next')</a>
    @else
        <a class="btn btn-primary float-right disabled" href="#">@lang('pagination.next')</a>
    @endif
@endif
