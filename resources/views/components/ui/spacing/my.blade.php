@props(['size' => 'md'])

@php
$sizeClass = match($size) { 'xs' => 'my-xs', 'sm' => 'my-sm', 'md' => 'my-md', 'lg' => 'my-lg', 'xl' => 'my-xl', '2xl' => 'my-2xl', default => 'my-md' };
@endphp

<div class="my {{ $sizeClass }}" {{ $attributes }}>
    {{ $slot }}
</div>