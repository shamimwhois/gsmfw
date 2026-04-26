@props(['size' => 'md'])

@php
$sizeClass = match($size) { 'xs' => 'mb-xs', 'sm' => 'mb-sm', 'md' => 'mb-md', 'lg' => 'mb-lg', 'xl' => 'mb-xl', '2xl' => 'mb-2xl', default => 'mb-md' };
@endphp

<div class="mb {{ $sizeClass }}" {{ $attributes }}>
    {{ $slot }}
</div>