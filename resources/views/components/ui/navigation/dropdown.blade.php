@props(['trigger' => 'click', 'placement' => 'bottom', 'size' => 'md'])

@php
$placementClass = match($placement) { 'top' => 'ui-dropdown-top', 'bottom' => 'ui-dropdown-bottom', 'left' => 'ui-dropdown-left', 'right' => 'ui-dropdown-right', default => 'ui-dropdown-bottom' };
$sizeClass = match($size) { 'sm' => 'ui-dropdown-sm', 'md' => 'ui-dropdown-md', 'lg' => 'ui-dropdown-lg', default => 'ui-dropdown-md' };
@endphp

<div class="ui-dropdown {{ $sizeClass }} {{ $placementClass }}" x-data="{ open: false }" @click.outside="open = false">
    <div class="ui-dropdown-trigger" @click="open = !open">
        {{ $slot }}
    </div>
</div>