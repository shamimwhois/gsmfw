@props(['size' => 'md', 'weight' => 'medium', 'variant' => 'default'])

@php
$sizeClass = match($size) { 'sm' => 'ui-title-sm', 'md' => 'ui-title-md', 'lg' => 'ui-title-lg', default => 'ui-title-md' };
$variantClass = match($variant) { 'primary' => 'ui-title-primary', 'secondary' => 'ui-title-secondary', 'muted' => 'ui-title-muted', default => 'ui-title-default' };
@endphp

<h3 class="ui-title {{ $sizeClass }} {{ $variantClass }}">
    {{ $slot }}
</h3>