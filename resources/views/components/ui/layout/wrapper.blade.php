@props(['size' => 'md'])

@php
$sizeClass = match($size) { 'sm' => 'ui-wrapper-sm', 'md' => 'ui-wrapper-md', 'lg' => 'ui-wrapper-lg', default => 'ui-wrapper-md' };
@endphp

<div class="ui-wrapper {{ $sizeClass }}">
    {{ $slot }}
</div>