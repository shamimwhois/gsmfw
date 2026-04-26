@props(['value' => 0, 'max' => 100, 'size' => 'md', 'variant' => 'default'])

@php
$sizeClass = match($size) { 'sm' => 'ui-progress-bar-sm', 'md' => 'ui-progress-bar-md', 'lg' => 'ui-progress-bar-lg', default => 'ui-progress-bar-md' };
$variantClass = match($variant) { 'primary' => 'ui-progress-bar-primary', 'success' => 'ui-progress-bar-success', 'warning' => 'ui-progress-bar-warning', 'error' => 'ui-progress-bar-error', default => 'ui-progress-bar-default' };
@endphp

<div class="ui-progress-bar {{ $sizeClass }} {{ $variantClass }}">
    <div class="ui-progress-bar-fill" style="width: {{ ($value / $max) * 100 }}%"></div>
</div>