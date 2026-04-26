@props(['size' => 'md', 'variant' => 'default'])

@php
$sizeClass = match($size) { 'sm' => 'ui-list-sm', 'md' => 'ui-list-md', 'lg' => 'ui-list-lg', default => 'ui-list-md' };
$variantClass = match($variant) { 'ordered' => 'ui-list-ordered', 'unordered' => 'ui-list-unordered', 'none' => 'ui-list-none', default => 'ui-list-unordered' };
@endphp

<{{ $variant === 'ordered' ? 'ol' : 'ul' }} class="ui-list {{ $sizeClass }} {{ $variantClass }}">
    {{ $slot }}
</{{ $variant === 'ordered' ? 'ol' : 'ul' }}>