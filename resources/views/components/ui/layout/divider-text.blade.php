@props(['label' => null, 'size' => 'md', 'variant' => 'default'])

@php
$sizeClass = match($size) { 'sm' => 'ui-divider-text-sm', 'md' => 'ui-divider-text-md', 'lg' => 'ui-divider-text-lg', default => 'ui-divider-text-md' };
$variantClass = match($variant) { 'dashed' => 'ui-divider-text-dashed', 'dotted' => 'ui-divider-text-dotted', default => '' };
@endphp

<div class="ui-divider-text {{ $sizeClass }} {{ $variantClass }}">
    <hr class="ui-divider-text-line" />
    @if($label)
    <span class="ui-divider-text-label">{{ $label }}</span>
    @endif
</div>