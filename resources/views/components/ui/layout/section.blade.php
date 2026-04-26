@props(['size' => 'md', 'bordered' => false])

@php
$sizeClass = match($size) { 'sm' => 'ui-section-sm', 'md' => 'ui-section-md', 'lg' => 'ui-section-lg', default => 'ui-section-md' };
@endphp

<section class="ui-section {{ $sizeClass }} {{ $bordered ? 'ui-section-bordered' : '' }}">
    {{ $slot }}
</section>