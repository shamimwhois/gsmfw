@props(['size' => 'md'])

@php
$sizeClass = match($size) { 'sm' => 'ui-tag-group-sm', 'md' => 'ui-tag-group-md', 'lg' => 'ui-tag-group-lg', default => 'ui-tag-group-md' };
@endphp

<div class="ui-tag-group {{ $sizeClass }}">
    {{ $slot }}
</div>