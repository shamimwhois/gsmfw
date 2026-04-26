@props(['variant' => 'default', 'size' => 'md', 'removable' => false])

@php
$variantClass = match($variant) { 'primary' => 'ui-chip-primary', 'secondary' => 'ui-chip-secondary', 'success' => 'ui-chip-success', 'warning' => 'ui-chip-warning', 'error' => 'ui-chip-error', default => 'ui-chip-default' };
$sizeClass = match($size) { 'sm' => 'ui-chip-sm', 'md' => 'ui-chip-md', 'lg' => 'ui-chip-lg', default => 'ui-chip-md' };
@endphp

<span class="ui-chip {{ $variantClass }} {{ $sizeClass }}">
    {{ $slot }}
    @if($removable)
    <button type="button" class="ui-chip-remove">✕</button>
    @endif
</span>