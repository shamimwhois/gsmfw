@props(['currentPage' => 1, 'totalPages' => 1, 'size' => 'md'])

@php
$sizeClass = match($size) { 'sm' => 'ui-pagination-simple-sm', 'md' => 'ui-pagination-simple-md', 'lg' => 'ui-pagination-simple-lg', default => 'ui-pagination-simple-md' };
@endphp

<nav class="ui-pagination-simple {{ $sizeClass }}" aria-label="Pagination">
    <div class="ui-pagination-simple-content">
        @if($currentPage > 1)
        <a href="?page={{ $currentPage - 1 }}" class="ui-pagination-simple-prev">Previous</a>
        @endif
        <span class="ui-pagination-simple-current">Page {{ $currentPage }} of {{ $totalPages }}</span>
        @if($currentPage < $totalPages)
        <a href="?page={{ $currentPage + 1 }}" class="ui-pagination-simple-next">Next</a>
        @endif
    </div>
</nav>