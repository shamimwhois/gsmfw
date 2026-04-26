@props(['size' => 'md'])

@php
$sizeClass = match($size) { 'xs' => 'm-xs', 'sm' => 'm-sm', 'md' => 'm-md', 'lg' => 'm-lg', 'xl' => 'm-xl', '2xl' => 'm-2xl', '3xl' => 'm-3xl', default => 'm-md' };
@endphp

<div class="m {{ $sizeClass }}" {{ $attributes }}>
    {{ $slot }}
</div>