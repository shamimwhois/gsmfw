@props(['size' => 'md', 'variant' => 'default'])

@php
$sizeClass = match($size) { 'sm' => 'ui-subtitle-sm', 'md' => 'ui-subtitle-md', 'lg' => 'ui-subtitle-lg', default => 'ui-subtitle-md' };
$variantClass = match($variant) { 'primary' => 'ui-subtitle-primary', 'secondary' => 'ui-subtitle-secondary', 'muted' => 'ui-subtitle-muted', default => 'ui-subtitle-default' };
@endphp

<p class="ui-subtitle {{ $sizeClass }} {{ $variantClass }}">
    {{ $slot }}
</p>