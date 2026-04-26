@props(['open' => false, 'placement' => 'left', 'closable' => true])

@php
$placementClass = match($placement) { 'left' => 'ui-drawer-fullscreen-left', 'right' => 'ui-drawer-fullscreen-right', 'top' => 'ui-drawer-fullscreen-top', 'bottom' => 'ui-drawer-fullscreen-bottom', default => 'ui-drawer-fullscreen-left' };
@endphp

<div class="ui-drawer-fullscreen {{ $placementClass }}" x-show="{{ $open }}">
    <div class="ui-drawer-fullscreen-backdrop" @click="open = false"></div>
    <div class="ui-drawer-fullscreen-panel">
        @if($closable)
        <button type="button" class="ui-drawer-fullscreen-close" @click="open = false">✕</button>
        @endif
        <div class="ui-drawer-fullscreen-body">{{ $slot }}</div>
    </div>
</div>