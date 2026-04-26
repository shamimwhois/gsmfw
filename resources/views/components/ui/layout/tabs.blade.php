@props(['variant' => 'default', 'size' => 'md', 'filled' => false, 'pill' => false])

@php
$variantClass = match($variant) { 'pills' => 'ui-tabs-pills', 'enclosed' => 'ui-tabs-enclosed', 'segment' => 'ui-tabs-segment', default => 'ui-tabs-default' };
$sizeClass = match($size) { 'sm' => 'ui-tabs-sm', 'md' => 'ui-tabs-md', 'lg' => 'ui-tabs-lg', default => 'ui-tabs-md' };
@endphp

<div class="ui-tabs {{ $variantClass }} {{ $sizeClass }} {{ $filled ? 'ui-tabs-filled' : '' }} {{ $pill ? 'ui-tabs-pill' : '' }}" {{ $attributes }}>
    <div class="ui-tabs-list" role="tablist">
        {{ $slot }}
    </div>
</div>