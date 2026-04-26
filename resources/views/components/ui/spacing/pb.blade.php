@props(['size' => 'md'])

@php
$sizeClass = match($size) { 'xs' => 'pb-xs', 'sm' => 'pb-sm', 'md' => 'pb-md', 'lg' => 'pb-lg', 'xl' => 'pb-xl', '2xl' => 'pb-2xl', default => 'pb-md' };
@endphp

<div class="pb {{ $sizeClass }}" {{ $attributes }}>
    {{ $slot }}
</div>