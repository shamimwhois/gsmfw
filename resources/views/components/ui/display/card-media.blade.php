@props(['src' => null, 'alt' => 'Card media', 'size' => 'md', 'cover' => false])

@php
$sizeClass = match($size) { 'sm' => 'ui-card-media-sm', 'md' => 'ui-card-media-md', 'lg' => 'ui-card-media-lg', 'full' => 'ui-card-media-full', default => 'ui-card-media-md' };
@endphp

<figure class="ui-card-media {{ $sizeClass }} {{ $cover ? 'ui-card-media-cover' : '' }}">
    @if($src)
    <img src="{{ $src }}" alt="{{ $alt }}" class="ui-card-media-img" />
    @else
    {{ $slot }}
    @endif
</figure>