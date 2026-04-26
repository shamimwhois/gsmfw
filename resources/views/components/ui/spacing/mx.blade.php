@props(['size' => 'md'])

@php
$sizeClass = match($size) { 'xs' => 'mx-xs', 'sm' => 'mx-sm', 'md' => 'mx-md', 'lg' => 'mx-lg', 'xl' => 'mx-xl', '2xl' => 'mx-2xl', default => 'mx-md' };
@endphp

<div class="mx {{ $sizeClass }}" {{ $attributes }}>
    {{ $slot }}
</div>