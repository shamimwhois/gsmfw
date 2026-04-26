@props(['multiple' => false, 'size' => 'md'])

@php
$sizeClass = match($size) { 'sm' => 'ui-accordion-sm', 'md' => 'ui-accordion-md', 'lg' => 'ui-accordion-lg', default => 'ui-accordion-md' };
@endphp

<div class="ui-accordion {{ $sizeClass }} {{ $multiple ? 'ui-accordion-multiple' : '' }}" {{ $attributes }}>
    {{ $slot }}
</div>