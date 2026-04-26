@props(['size' => 'lg'])

@php
$sizeClass = match($size) { 'none' => 'rounded-none', 'sm' => 'rounded-sm', 'md' => 'rounded-md', 'lg' => 'rounded-lg', 'xl' => 'rounded-xl', '2xl' => 'rounded-2xl', '3xl' => 'rounded-3xl', 'full' => 'rounded-full', default => 'rounded-lg' };
@endphp

<div class="ui-rounded-lg {{ $sizeClass }}" {{ $attributes }}>
    {{ $slot }}
</div>