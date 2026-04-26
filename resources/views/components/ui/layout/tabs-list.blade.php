@props(['size' => 'md'])

@php
$sizeClass = match($size) { 'sm' => 'ui-tabs-list-sm', 'md' => 'ui-tabs-list-md', 'lg' => 'ui-tabs-list-lg', default => 'ui-tabs-list-md' };
@endphp

<div class="ui-tabs-list {{ $sizeClass }}" role="tablist">
    {{ $slot }}
</div>