@props(['size' => 'md'])

@php
$sizeClass = match($size) { 'sm' => 'ui-image-gallery-sm', 'md' => 'ui-image-gallery-md', 'lg' => 'ui-image-gallery-lg', default => 'ui-image-gallery-md' };
@endphp

<div class="ui-image-gallery {{ $sizeClass }}">
    {{ $slot }}
</div>