@props(['size' => 'md'])

@php
$sizeClass = match($size) { 'xs' => 'pl-xs', 'sm' => 'pl-sm', 'md' => 'pl-md', 'lg' => 'pl-lg', 'xl' => 'pl-xl', '2xl' => 'pl-2xl', default => 'pl-md' };
@endphp

<div class="pl {{ $sizeClass }}" {{ $attributes }}>
    {{ $slot }}
</div>