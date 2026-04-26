@props(['items' => [], 'size' => 'md', 'sortable' => false])

@php
$sizeClass = match($size) { 'sm' => 'ui-list-sortable-sm', 'md' => 'ui-list-sortable-md', 'lg' => 'ui-list-sortable-lg', default => 'ui-list-sortable-md' };
@endphp

<div class="ui-list-sortable {{ $sizeClass }} {{ $sortable ? 'ui-list-sortable-enabled' : '' }}">
    {{ $slot }}
</div>