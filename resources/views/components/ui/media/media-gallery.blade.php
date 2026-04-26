@props(['size' => 'md'])

@php
$sizeClass = match($size) { 'sm' => 'ui-media-gallery-sm', 'md' => 'ui-media-gallery-md', 'lg' => 'ui-media-gallery-lg', default => 'ui-media-gallery-md' };
@endphp

<div class="ui-media-gallery {{ $sizeClass }}">
    {{ $slot }}
</div>