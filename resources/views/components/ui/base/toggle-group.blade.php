@props(['checked' => false, 'disabled' => false, 'size' => 'md', 'value' => '1'])

@php
$classes = 'ui-toggle-group';
$classes .= match($size) { 'sm' => ' ui-toggle-group-sm', 'md' => ' ui-toggle-group-md', 'lg' => ' ui-toggle-group-lg', default => '' };
@endphp

<div class="{{ $classes }}">
    {{ $slot }}
</div>