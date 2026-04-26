@props(['size' => 'md'])

@php
$sizeClass = match($size) { 'sm' => 'ui-card-horizontal-sm', 'md' => 'ui-card-horizontal-md', 'lg' => 'ui-card-horizontal-lg', default => 'ui-card-horizontal-md' };
@endphp

<article class="ui-card-horizontal {{ $sizeClass }}" {{ $attributes }}>
    {{ $slot }}
</article>