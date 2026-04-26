@props(['size' => 'md'])

@php
$sizeClass = match($size) { 'sm' => 'ui-card-media-full-sm', 'md' => 'ui-card-media-full-md', 'lg' => 'ui-card-media-full-lg', default => 'ui-card-media-full-md' };
@endphp

<figure class="ui-card-media-full {{ $sizeClass }}">
    {{ $slot }}
</figure>