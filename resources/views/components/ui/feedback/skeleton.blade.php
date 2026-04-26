@props(['variant' => 'default', 'size' => 'md', 'animated' => true])

@php
$variantClass = match($variant) { 'primary' => 'ui-skeleton-primary', 'secondary' => 'ui-skeleton-secondary', default => 'ui-skeleton-default' };
$sizeClass = match($size) { 'sm' => 'ui-skeleton-sm', 'md' => 'ui-skeleton-md', 'lg' => 'ui-skeleton-lg', default => 'ui-skeleton-md' };
@endphp

<div class="ui-skeleton {{ $variantClass }} {{ $sizeClass }} {{ $animated ? 'ui-skeleton-animated' : '' }}" {{ $attributes }}>
    {{ $slot }}
</div>