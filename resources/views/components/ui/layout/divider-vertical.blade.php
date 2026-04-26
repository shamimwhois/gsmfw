@props(['size' => 'md'])

@php
$sizeClass = match($size) { 'sm' => 'ui-divider-vertical-sm', 'md' => 'ui-divider-vertical-md', 'lg' => 'ui-divider-vertical-lg', default => 'ui-divider-vertical-md' };
@endphp

<div class="ui-divider-vertical {{ $sizeClass }}" {{ $attributes }}></div>