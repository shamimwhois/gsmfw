@props(['size' => 'md'])

@php
$sizeClass = match($size) { 'sm' => 'ui-table-expandable-sm', 'md' => 'ui-table-expandable-md', 'lg' => 'ui-table-expandable-lg', default => 'ui-table-expandable-md' };
@endphp

<div class="ui-table-wrapper">
    <table class="ui-table-expandable {{ $sizeClass }}">
        {{ $slot }}
    </table>
</div>