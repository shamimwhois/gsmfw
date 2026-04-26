@props(['size' => 'md', 'sortable' => false])

@php
$sizeClass = match($size) { 'sm' => 'ui-table-sortable-sm', 'md' => 'ui-table-sortable-md', 'lg' => 'ui-table-sortable-lg', default => 'ui-table-sortable-md' };
@endphp

<div class="ui-table-wrapper">
    <table class="ui-table-sortable {{ $sizeClass }} {{ $sortable ? 'ui-table-sortable-enabled' : '' }}">
        {{ $slot }}
    </table>
</div>