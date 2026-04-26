@props(['size' => 'md', 'weight' => 'normal', 'variant' => 'default'])

@php
$sizeClass = match($size) { 'xs' => 'ui-text-xs', 'sm' => 'ui-text-sm', 'md' => 'ui-text-md', 'lg' => 'ui-text-lg', 'xl' => 'ui-text-xl', default => 'ui-text-md' };
$variantClass = match($variant) { 'primary' => 'ui-text-primary', 'secondary' => 'ui-text-secondary', 'muted' => 'ui-text-muted', 'success' => 'ui-text-success', 'warning' => 'ui-text-warning', 'error' => 'ui-text-error', default => 'ui-text-default' };
@endphp

<p class="ui-text {{ $sizeClass }} {{ $variantClass }}">
    {{ $slot }}
</p>