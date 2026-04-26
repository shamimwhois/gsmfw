@props(['size' => 'md'])

@php
$sizeClass = match($size) { 'sm' => 'ui-list-group-sm', 'md' => 'ui-list-group-md', 'lg' => 'ui-list-group-lg', default => 'ui-list-group-md' };
@endphp

<ul class="ui-list-group {{ $sizeClass }}">
    {{ $slot }}
</ul>