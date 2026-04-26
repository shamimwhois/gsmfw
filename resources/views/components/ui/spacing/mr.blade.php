@props(['size' => 'md'])

@php
$sizeClass = match($size) { 'xs' => 'mr-xs', 'sm' => 'mr-sm', 'md' => 'mr-md', 'lg' => 'mr-lg', 'xl' => 'mr-xl', '2xl' => 'mr-2xl', default => 'mr-md' };
@endphp

<div class="mr {{ $sizeClass }}" {{ $attributes }}>
    {{ $slot }}
</div>