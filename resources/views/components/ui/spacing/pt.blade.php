@props(['size' => 'md'])

@php
$sizeClass = match($size) { 'xs' => 'pt-xs', 'sm' => 'pt-sm', 'md' => 'pt-md', 'lg' => 'pt-lg', 'xl' => 'pt-xl', '2xl' => 'pt-2xl', default => 'pt-md' };
@endphp

<div class="pt {{ $sizeClass }}" {{ $attributes }}>
    {{ $slot }}
</div>