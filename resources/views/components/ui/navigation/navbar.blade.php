@props(['sticky' => false, 'size' => 'md'])

@php
$sizeClass = match($size) { 'sm' => 'ui-navbar-sm', 'md' => 'ui-navbar-md', 'lg' => 'ui-navbar-lg', default => 'ui-navbar-md' };
@endphp

<nav class="ui-navbar {{ $sizeClass }} {{ $sticky ? 'ui-navbar-sticky' : '' }}">
    {{ $slot }}
</nav>