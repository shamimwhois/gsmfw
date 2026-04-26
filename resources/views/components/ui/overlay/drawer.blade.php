@props(['open' => false, 'placement' => 'left', 'size' => 'md', 'closable' => true])

@php
$placementClass = match($placement) { 'left' => 'ui-drawer-left', 'right' => 'ui-drawer-right', 'top' => 'ui-drawer-top', 'bottom' => 'ui-drawer-bottom', default => 'ui-drawer-left' };
$sizeClass = match($size) { 'sm' => 'ui-drawer-sm', 'md' => 'ui-drawer-md', 'lg' => 'ui-drawer-lg', 'full' => 'ui-drawer-full', default => 'ui-drawer-md' };
@endphp

<div class="ui-drawer {{ $placementClass }} {{ $sizeClass }}" x-show="{{ $open }}" x-transition>
    <div class="ui-drawer-backdrop" @click="open = false"></div>
    <div class="ui-drawer-content">
        @if($closable)
        <button type="button" class="ui-drawer-close" @click="open = false">✕</button>
        @endif
        <div class="ui-drawer-body">{{ $slot }}</div>
    </div>
</div>