@props(['items' => [], 'size' => 'md'])

@php
$sizeClass = match($size) { 'sm' => 'ui-tree-view-sm', 'md' => 'ui-tree-view-md', 'lg' => 'ui-tree-view-lg', default => 'ui-tree-view-md' };
@endphp

<div class="ui-tree-view {{ $sizeClass }}">
    {{ $slot }}
</div>