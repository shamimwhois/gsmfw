@props(['size' => 'md'])

@php
$sizeClass = match($size) { 'sm' => 'ui-table-striped-sm', 'md' => 'ui-table-striped-md', 'lg' => 'ui-table-striped-lg', default => 'ui-table-striped-md' };
@endphp

<div class="ui-table-wrapper">
    <table class="ui-table-striped {{ $sizeClass }}">
        {{ $slot }}
    </table>
</div>