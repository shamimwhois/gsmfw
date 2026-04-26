@props(['href' => null, 'disabled' => false, 'glow' => false, 'size' => 'md'])

@php
$sizeClass = match($size) {
    'sm' => 'ui-link-button-sm', 'md' => 'ui-link-button-md', 'lg' => 'ui-link-button-lg', default => 'ui-link-button-md',
};
@endphp

@if($href)
<a href="{{ $href }}" class="ui-link-button {{ $sizeClass }} {{ $glow ? 'ui-link-button-glow' : '' }} {{ $disabled ? 'ui-link-button-disabled' : '' }}">{{ $slot }}</a>
@else
<button type="button" class="ui-link-button {{ $sizeClass }} {{ $glow ? 'ui-link-button-glow' : '' }} {{ $disabled ? 'ui-link-button-disabled' : '' }}" {{ $disabled ? 'disabled' : '' }} {{ $attributes }}>{{ $slot }}</button>
@endif