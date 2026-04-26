@props(['size' => 'md'])

@php
$sizeClass = match($size) { 'xs' => 'pr-xs', 'sm' => 'pr-sm', 'md' => 'pr-md', 'lg' => 'pr-lg', 'xl' => 'pr-xl', '2xl' => 'pr-2xl', default => 'pr-md' };
@endphp

<div class="pr {{ $sizeClass }}" {{ $attributes }}>
    {{ $slot }}
</div>