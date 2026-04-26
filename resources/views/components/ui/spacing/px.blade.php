@props(['size' => 'md'])

@php
$sizeClass = match($size) { 'xs' => 'px-xs', 'sm' => 'px-sm', 'md' => 'px-md', 'lg' => 'px-lg', 'xl' => 'px-xl', '2xl' => 'px-2xl', default => 'px-md' };
@endphp

<div class="px {{ $sizeClass }}" {{ $attributes }}>
    {{ $slot }}
</div>