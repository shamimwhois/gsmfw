@props(['size' => 'md'])

@php
$sizeClass = match($size) { 'xs' => 'mt-xs', 'sm' => 'mt-sm', 'md' => 'mt-md', 'lg' => 'mt-lg', 'xl' => 'mt-xl', '2xl' => 'mt-2xl', default => 'mt-md' };
@endphp

<div class="mt {{ $sizeClass }}" {{ $attributes }}>
    {{ $slot }}
</div>