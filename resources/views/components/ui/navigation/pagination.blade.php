@props(['currentPage' => 1, 'totalPages' => 1, 'maxLinks' => 7, 'size' => 'md'])

@php
$sizeClass = match($size) { 'sm' => 'ui-pagination-sm', 'md' => 'ui-pagination-md', 'lg' => 'ui-pagination-lg', default => 'ui-pagination-md' };
@endphp

<nav class="ui-pagination {{ $sizeClass }}" aria-label="Pagination">
    <ul class="ui-pagination-list">
        @if($currentPage > 1)
        <li class="ui-pagination-item ui-pagination-prev">
            <a href="?page={{ $currentPage - 1 }}" aria-label="Previous">‹</a>
        </li>
        @endif
        
        @for($i = 1; $i <= $totalPages; $i++)
        <li class="ui-pagination-item {{ $i == $currentPage ? 'ui-pagination-item-active' : '' }}">
            <a href="?page={{ $i }}">{{ $i }}</a>
        </li>
        @endfor
        
        @if($currentPage < $totalPages)
        <li class="ui-pagination-item ui-pagination-next">
            <a href="?page={{ $currentPage + 1 }}" aria-label="Next">›</a>
        </li>
        @endif
    </ul>
</nav>