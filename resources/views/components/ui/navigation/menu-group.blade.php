@props(['title' => 'Menu', 'size' => 'md'])

@php
$sizeClass = match($size) { 'sm' => 'ui-menu-group-sm', 'md' => 'ui-menu-group-md', 'lg' => 'ui-menu-group-lg', default => 'ui-menu-group-md' };
@endphp

<div class="ui-menu-group {{ $sizeClass }}">
    @if($title)
    <span class="ui-menu-group-title">{{ $title }}</span>
    @endif
    <menu>{{ $slot }}</menu>
</div>