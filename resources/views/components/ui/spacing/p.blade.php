@props(['size' => 'md'])

@php
$sizeClass = match($size) { 'xs' => 'p-xs', 'sm' => 'p-sm', 'md' => 'p-md', 'lg' => 'p-lg', 'xl' => 'p-xl', '2xl' => 'p-2xl', '3xl' => 'p-3xl', default => 'p-md' };
@endphp

<div class="p {{ $sizeClass }}" {{ $attributes }}>
    {{ $slot }}
</div>