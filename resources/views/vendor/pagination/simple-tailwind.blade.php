@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-between">
        {{-- Previous Page Link --}}
        <div class="row mt25 animated" data-animation="fadeInUp" data-animation-delay="800">
            <div class="col-md-6">
                @if ($paginator->onFirstPage())
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="button button-sm button-pasific pull-right hover-skew-backward">
                    {!! __('pagination.previous') !!}</a>
                @else
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="button button-sm button-pasific pull-right hover-skew-backward">
                    {!! __('pagination.previous') !!}</a>
                @endif
            </div>
            <div class="col-md-6">
                @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="button button-sm button-pasific pull-left hover-skew-forward">{!! __('pagination.next') !!}</a>
                @else
                <a href="#" class="button button-sm button-pasific pull-left hover-skew-forward">
                    {!! __('pagination.next') !!}</a>
                @endif
            </div>
        </div>
    </nav>
@endif

