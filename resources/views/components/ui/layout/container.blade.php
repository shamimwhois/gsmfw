@props(['size' => 'md', 'fluid' => false])

@php
$sizeClass = match($size) { 'sm' => 'ui-container-sm', 'md' => 'ui-container-md', 'lg' => 'ui-container-lg', 'xl' => 'ui-container-xl', 'full' => 'ui-container-full', default => 'ui-container-md' };
@endphp

<div class="ui-container {{ $sizeClass }} {{ $fluid ? 'ui-container-fluid' : '' }}">
    {{ $slot }}
</div>