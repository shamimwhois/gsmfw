@props(['size' => 'md', 'variant' => 'default'])

@php
$sizeClass = match($size) { 'sm' => 'ui-text-lead-sm', 'md' => 'ui-text-lead-md', 'lg' => 'ui-text-lead-lg', default => 'ui-text-lead-md' };
$variantClass = match($variant) { 'primary' => 'ui-text-lead-primary', 'secondary' => 'ui-text-lead-secondary', 'muted' => 'ui-text-lead-muted', default => 'ui-text-lead-default' };
@endphp

<p class="ui-text-lead {{ $sizeClass }} {{ $variantClass }}">
    {{ $slot }}
</p>