@props(['size' => 'md'])

@php
$sizeClass = match($size) { 'sm' => 'ui-dropdown-menu-sm', 'md' => 'ui-dropdown-menu-md', 'lg' => 'ui-dropdown-menu-lg', default => 'ui-dropdown-menu-md' };
@endphp

<div class="ui-dropdown-menu {{ $sizeClass }}">
    {{ $slot }}
</div>