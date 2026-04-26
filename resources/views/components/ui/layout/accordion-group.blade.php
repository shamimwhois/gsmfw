@props(['size' => 'md'])

@php
$sizeClass = match($size) { 'sm' => 'ui-accordion-group-sm', 'md' => 'ui-accordion-group-md', 'lg' => 'ui-accordion-group-lg', default => 'ui-accordion-group-md' };
@endphp

<div class="ui-accordion-group {{ $sizeClass }}">
    {{ $slot }}
</div>