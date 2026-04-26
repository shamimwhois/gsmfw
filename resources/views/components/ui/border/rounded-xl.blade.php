@props(['size' => 'xl'])

@php
$sizeClass = match($size) { 'none' => 'rounded-none', 'sm' => 'rounded-sm', 'md' => 'rounded-md', 'lg' => 'rounded-lg', 'xl' => 'rounded-xl', '2xl' => 'rounded-2xl', '3xl' => 'rounded-3xl', 'full' => 'rounded-full', default => 'rounded-xl' };
@endphp

<div class="ui-rounded-xl {{ $sizeClass }}" {{ $attributes }}>
    {{ $slot }}
</div>