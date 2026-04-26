@props(['images' => [], 'size' => 'md'])

@php
$sizeClass = match($size) { 'sm' => 'ui-image-slider-sm', 'md' => 'ui-image-slider-md', 'lg' => 'ui-image-slider-lg', default => 'ui-image-slider-md' };
@endphp

<div class="ui-image-slider {{ $sizeClass }}">
    {{ $slot }}
</div>