@props(['level' => 1, 'size' => 'md', 'weight' => 'normal', 'variant' => 'default'])

@php
$levelClass = match($level) { 1 => 'ui-heading-1', 2 => 'ui-heading-2', 3 => 'ui-heading-3', 4 => 'ui-heading-4', 5 => 'ui-heading-5', 6 => 'ui-heading-6', default => 'ui-heading-1' };
$sizeClass = match($size) { 'sm' => 'ui-heading-sm', 'md' => 'ui-heading-md', 'lg' => 'ui-heading-lg', default => 'ui-heading-md' };
$variantClass = match($variant) { 'primary' => 'ui-heading-primary', 'secondary' => 'ui-heading-secondary', 'muted' => 'ui-heading-muted', default => 'ui-heading-default' };
@endphp

<{{ $level }} class="ui-heading {{ $levelClass }} {{ $sizeClass }} {{ $variantClass }}">
    {{ $slot }}
</{{ $level }}>