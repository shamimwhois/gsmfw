@props(['size' => 'md', 'variant' => 'default'])

@php
$sizeClass = match($size) { 'sm' => 'ui-divider-sm', 'md' => 'ui-divider-md', 'lg' => 'ui-divider-lg', default => 'ui-divider-md' };
$variantClass = match($variant) { 'dashed' => 'ui-divider-dashed', 'dotted' => 'ui-divider-dotted', 'double' => 'ui-divider-double', default => 'ui-divider-solid' };
@endphp

<hr class="ui-divider {{ $sizeClass }} {{ $variantClass }}" {{ $attributes }} />