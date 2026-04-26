@props(['size' => 'sm'])

@php
$sizeClass = match($size) { 'xs' => 'space-xs', 'sm' => 'space-sm', 'md' => 'space-md', 'lg' => 'space-lg', 'xl' => 'space-xl', '2xl' => 'space-2xl', '3xl' => 'space-3xl', default => 'space-md' };
@endphp

<div class="ui-space {{ $sizeClass }}" {{ $attributes }}>
    {{ $slot }}
</div>