@props(['hoverable' => true, 'size' => 'md'])

@php
$sizeClass = match($size) { 'sm' => 'ui-card-hover-sm', 'md' => 'ui-card-hover-md', 'lg' => 'ui-card-hover-lg', default => 'ui-card-hover-md' };
@endphp

<article class="ui-card-hover {{ $sizeClass }} {{ $hoverable ? 'ui-card-hover-active' : '' }}" {{ $attributes }}>
    {{ $slot }}
</article>