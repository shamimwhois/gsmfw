@props(['label' => null, 'size' => 'md'])

@php
$sizeClass = match($size) { 'sm' => 'ui-tab-content-sm', 'md' => 'ui-tab-content-md', 'lg' => 'ui-tab-content-lg', default => 'ui-tab-content-md' };
@endphp

<div class="ui-tab-content {{ $sizeClass }}" role="tabpanel">
    {{ $slot }}
</div>