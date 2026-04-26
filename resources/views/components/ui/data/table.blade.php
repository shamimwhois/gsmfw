@props(['striped' => false, 'hover' => false, 'bordered' => false, 'size' => 'md'])

@php
$sizeClass = match($size) { 'sm' => 'ui-table-sm', 'md' => 'ui-table-md', 'lg' => 'ui-table-lg', default => 'ui-table-md' };
@endphp

<div class="ui-table-wrapper">
    <table class="ui-table {{ $sizeClass }} {{ $striped ? 'ui-table-striped' : '' }} {{ $hover ? 'ui-table-hover' : '' }} {{ $bordered ? 'ui-table-bordered' : '' }}">
        {{ $slot }}
    </table>
</div>