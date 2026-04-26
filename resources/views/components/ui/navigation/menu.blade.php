@props(['size' => 'md'])

@php
$sizeClass = match($size) { 'sm' => 'ui-menu-sm', 'md' => 'ui-menu-md', 'lg' => 'ui-menu-lg', default => 'ui-menu-md' };
@endphp

<menu class="ui-menu {{ $sizeClass }}">
    {{ $slot }}
</menu>