@props(['src' => null, 'alt' => 'Image', 'size' => 'md', 'lazy' => true, 'cover' => false])

@php
$sizeClass = match($size) { 'xs' => 'ui-image-xs', 'sm' => 'ui-image-sm', 'md' => 'ui-image-md', 'lg' => 'ui-image-lg', 'xl' => 'ui-image-xl', 'full' => 'ui-image-full', default => 'ui-image-md' };
@endphp

<figure class="ui-image {{ $sizeClass }} {{ $cover ? 'ui-image-cover' : '' }}">
    @if($src)
    <img src="{{ $src }}" alt="{{ $alt }}" class="ui-image-img" @if($lazy)loading="lazy"@endif />
    @else
    {{ $slot }}
    @endif
</figure>