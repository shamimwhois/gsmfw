@props(['size' => 'md'])

@php
$sizeClass = match($size) { 'sm' => 'ui-chip-group-sm', 'md' => 'ui-chip-group-md', 'lg' => 'ui-chip-group-lg', default => 'ui-chip-group-md' };
@endphp

<div class="ui-chip-group {{ $sizeClass }}">
    {{ $slot }}
</div>