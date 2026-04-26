@props(['collapsed' => false, 'size' => 'md', 'variant' => 'default'])

@php
$sizeClass = match($size) { 'sm' => 'ui-sidebar-sm', 'md' => 'ui-sidebar-md', 'lg' => 'ui-sidebar-lg', default => 'ui-sidebar-md' };
$variantClass = match($variant) { 'dark' => 'ui-sidebar-dark', 'light' => 'ui-sidebar-light', default => 'ui-sidebar-default' };
@endphp

<aside class="ui-sidebar {{ $sizeClass }} {{ $variantClass }} {{ $collapsed ? 'ui-sidebar-collapsed' : '' }}">
    {{ $slot }}
</aside>