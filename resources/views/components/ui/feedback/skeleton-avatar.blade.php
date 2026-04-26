@props(['size' => 'md', 'variant' => 'default', 'animated' => true])

@php
$sizeClass = match($size) { 'sm' => 'ui-skeleton-avatar-sm', 'md' => 'ui-skeleton-avatar-md', 'lg' => 'ui-skeleton-avatar-lg', default => 'ui-skeleton-avatar-md' };
$variantClass = match($variant) { 'primary' => 'ui-skeleton-avatar-primary', 'secondary' => 'ui-skeleton-avatar-secondary', default => 'ui-skeleton-avatar-default' };
@endphp

<div class="ui-skeleton-avatar {{ $sizeClass }} {{ $variantClass }} {{ $animated ? 'ui-skeleton-avatar-animated' : '' }}"></div>