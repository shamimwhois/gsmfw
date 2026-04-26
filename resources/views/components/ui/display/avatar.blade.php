@props(['src' => null, 'alt' => 'Avatar', 'size' => 'md', 'shape' => 'circle', 'fallback' => null])

@php
$sizeClass = match($size) { 'xs' => 'ui-avatar-xs', 'sm' => 'ui-avatar-sm', 'md' => 'ui-avatar-md', 'lg' => 'ui-avatar-lg', 'xl' => 'ui-avatar-xl', '2xl' => 'ui-avatar-2xl', default => 'ui-avatar-md' };
$shapeClass = match($shape) { 'circle' => 'ui-avatar-circle', 'square' => 'ui-avatar-square', 'rounded' => 'ui-avatar-rounded', default => 'ui-avatar-circle' };
$fallback = $fallback ?? substr($slot ?? '?', 0, 2);
@endphp

<div class="ui-avatar {{ $sizeClass }} {{ $shapeClass }}">
    @if($src)
    <img src="{{ $src }}" alt="{{ $alt }}" class="ui-avatar-img" />
    @else
    <span class="ui-avatar-fallback">{{ $fallback }}</span>
    @endif
</div>