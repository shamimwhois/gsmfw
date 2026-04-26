@props(['size' => 'md'])

@php
$sizeClass = match($size) { 'xs' => 'space-xs', 'sm' => 'space-sm', 'md' => 'space-md', 'lg' => 'space-lg', 'xl' => 'space-xl', '2xl' => 'space-2xl', default => 'space-md' };
@endphp

<div class="space-{{ $sizeClass }}" {{ $attributes }}>
    {{ $slot }}
</div>