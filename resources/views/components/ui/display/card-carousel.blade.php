@props(['label' => null, 'size' => 'md'])

@php
$sizeClass = match($size) { 'sm' => 'ui-card-carousel-sm', 'md' => 'ui-card-carousel-md', 'lg' => 'ui-card-carousel-lg', default => 'ui-card-carousel-md' };
@endphp

<div class="ui-card-carousel {{ $sizeClass }}">
    @if($label)
    <div class="ui-card-carousel-header">{{ $label }}</div>
    @endif
    <div class="ui-card-carousel-items">
        {{ $slot }}
    </div>
</div>