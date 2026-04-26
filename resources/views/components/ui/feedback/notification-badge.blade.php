@props(['count' => 0, 'max' => 9, 'variant' => 'error', 'size' => 'sm'])

@php
$variantClass = match($variant) { 'primary' => 'ui-notification-badge-primary', 'success' => 'ui-notification-badge-success', 'warning' => 'ui-notification-badge-warning', 'error' => 'ui-notification-badge-error', default => 'ui-notification-badge-error' };
$sizeClass = match($size) { 'sm' => 'ui-notification-badge-sm', 'md' => 'ui-notification-badge-md', 'lg' => 'ui-notification-badge-lg', default => 'ui-notification-badge-sm' };
$displayCount = $count > $max ? $max . '+' : $count;
@endphp

@if($count > 0)
<span class="ui-notification-badge {{ $variantClass }} {{ $sizeClass }}">
    {{ $displayCount }}
</span>
@endif