@props(['max' => 4, 'size' => 'md'])

@php
$sizeClass = match($size) { 'xs' => 'ui-avatar-group-xs', 'sm' => 'ui-avatar-group-sm', 'md' => 'ui-avatar-group-md', 'lg' => 'ui-avatar-group-lg', default => 'ui-avatar-group-md' };
@endphp

<div class="ui-avatar-group {{ $sizeClass }}" data-max="{{ $max }}">
    {{ $slot }}
</div>