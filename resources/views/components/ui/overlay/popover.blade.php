@props(['title' => null, 'placement' => 'top', 'size' => 'md', 'trigger' => 'click'])

@php
$placementClass = match($placement) { 'top' => 'ui-popover-top', 'bottom' => 'ui-popover-bottom', 'left' => 'ui-popover-left', 'right' => 'ui-popover-right', default => 'ui-popover-top' };
$sizeClass = match($size) { 'sm' => 'ui-popover-sm', 'md' => 'ui-popover-md', 'lg' => 'ui-popover-lg', default => 'ui-popover-md' };
@endphp

<div class="ui-popover {{ $placementClass }} {{ $sizeClass }}" x-data="{ open: false }">
    <div class="ui-popover-trigger" @click="open = !open">{{ $slot }}</div>
    <div class="ui-popover-content" x-show="open" x-transition>
        @if($title)
        <div class="ui-popover-header">{{ $title }}</div>
        @endif
        <div class="ui-popover-body">{{ $slot }}</div>
    </div>
</div>