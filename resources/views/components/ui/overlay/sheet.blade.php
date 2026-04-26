@props(['open' => false, 'placement' => 'bottom', 'size' => 'md', 'closable' => true])

@php
$placementClass = match($placement) { 'top' => 'ui-sheet-top', 'bottom' => 'ui-sheet-bottom', 'left' => 'ui-sheet-left', 'right' => 'ui-sheet-right', default => 'ui-sheet-bottom' };
$sizeClass = match($size) { 'sm' => 'ui-sheet-sm', 'md' => 'ui-sheet-md', 'lg' => 'ui-sheet-lg', 'full' => 'ui-sheet-full', default => 'ui-sheet-md' };
@endphp

<div class="ui-sheet {{ $placementClass }} {{ $sizeClass }}" x-show="{{ $open }}" x-transition>
    <div class="ui-sheet-backdrop" @click="open = false"></div>
    <div class="ui-sheet-panel">
        @if($closable)
        <button type="button" class="ui-sheet-close" @click="open = false">✕</button>
        @endif
        <div class="ui-sheet-content">{{ $slot }}</div>
    </div>
</div>