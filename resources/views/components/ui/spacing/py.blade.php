@props(['size' => 'md'])

@php
$sizeClass = match($size) { 'xs' => 'py-xs', 'sm' => 'py-sm', 'md' => 'py-md', 'lg' => 'py-lg', 'xl' => 'py-xl', '2xl' => 'py-2xl', default => 'py-md' };
@endphp

<div class="py {{ $sizeClass }}" {{ $attributes }}>
    {{ $slot }}
</div>