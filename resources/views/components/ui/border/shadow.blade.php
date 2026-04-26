@props(['size' => 'md', 'glow' => false])

@php
$sizeClass = match($size) { 'none' => 'shadow-none', 'sm' => 'shadow-sm', 'md' => 'shadow-md', 'lg' => 'shadow-lg', 'xl' => 'shadow-xl', '2xl' => 'shadow-2xl', 'inner' => 'shadow-inner', default => 'shadow-md' };
@endphp

<div class="ui-shadow {{ $sizeClass }} {{ $glow ? 'shadow-glow' : '' }}" {{ $attributes }}>
    {{ $slot }}
</div>