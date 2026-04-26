@props(['title' => null, 'open' => false, 'size' => 'md'])

@php
$sizeClass = match($size) { 'sm' => 'ui-accordion-item-sm', 'md' => 'ui-accordion-item-md', 'lg' => 'ui-accordion-item-lg', default => 'ui-accordion-item-md' };
@endphp

<div class="ui-accordion-item {{ $sizeClass }} {{ $open ? 'ui-accordion-item-open' : '' }}">
    <div class="ui-accordion-item-header">
        <button type="button" class="ui-accordion-item-trigger">{{ $title }}</button>
        <span class="ui-accordion-item-icon">▼</span>
    </div>
    <div class="ui-accordion-item-content">
        {{ $slot }}
    </div>
</div>