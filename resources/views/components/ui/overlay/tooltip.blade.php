@props(['content' => null, 'placement' => 'top', 'size' => 'md'])

@php
$placementClass = match($placement) { 'top' => 'ui-tooltip-top', 'bottom' => 'ui-tooltip-bottom', 'left' => 'ui-tooltip-left', 'right' => 'ui-tooltip-right', default => 'ui-tooltip-top' };
$sizeClass = match($size) { 'sm' => 'ui-tooltip-sm', 'md' => 'ui-tooltip-md', 'lg' => 'ui-tooltip-lg', default => 'ui-tooltip-md' };
@endphp

<div class="ui-tooltip {{ $placementClass }} {{ $sizeClass }}" data-tooltip="{{ $content }}">
    {{ $slot }}
</div>