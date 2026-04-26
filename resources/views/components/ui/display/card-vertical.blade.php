@props(['size' => 'md'])

@php
$sizeClass = match($size) { 'sm' => 'ui-card-vertical-sm', 'md' => 'ui-card-vertical-md', 'lg' => 'ui-card-vertical-lg', default => 'ui-card-vertical-md' };
@endphp

<article class="ui-card-vertical {{ $sizeClass }}" {{ $attributes }}>
    {{ $slot }}
</article>