@props(['size' => 'md'])

@php
$sizeClass = match($size) { 'sm' => 'ui-timeline-sm', 'md' => 'ui-timeline-md', 'lg' => 'ui-timeline-lg', default => 'ui-timeline-md' };
@endphp

<div class="ui-timeline {{ $sizeClass }}">
    {{ $slot }}
</div>