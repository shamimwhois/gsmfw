@props(['size' => 'md'])

@php
$sizeClass = match($size) { 'sm' => 'ui-table-hover-sm', 'md' => 'ui-table-hover-md', 'lg' => 'ui-table-hover-lg', default => 'ui-table-hover-md' };
@endphp

<div class="ui-table-wrapper">
    <table class="ui-table-hover {{ $sizeClass }}">
        {{ $slot }}
    </table>
</div>