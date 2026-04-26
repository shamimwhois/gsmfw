@props(['size' => 'md'])

@php
$sizeClass = match($size) { 'xs' => 'ml-xs', 'sm' => 'ml-sm', 'md' => 'ml-md', 'lg' => 'ml-lg', 'xl' => 'ml-xl', '2xl' => 'ml-2xl', default => 'ml-md' };
@endphp

<div class="ml {{ $sizeClass }}" {{ $attributes }}>
    {{ $slot }}
</div>