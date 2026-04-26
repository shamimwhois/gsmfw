@props(['size' => 'full'])

@php
$sizeClass = match($size) { 'none' => 'rounded-none', 'sm' => 'rounded-sm', 'md' => 'rounded-md', 'lg' => 'rounded-lg', 'xl' => 'rounded-xl', '2xl' => 'rounded-2xl', '3xl' => 'rounded-3xl', 'full' => 'rounded-full', default => 'rounded-full' };
@endphp

<div class="ui-rounded-full {{ $sizeClass }}" {{ $attributes }}>
    {{ $slot }}
</div>