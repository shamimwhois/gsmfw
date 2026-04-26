@props(['variant' => 'default', 'size' => 'md', 'pulse' => false, 'dot' => false])

@php
$variantClass = match($variant) {
    'primary' => 'ui-badge-primary',
    'secondary' => 'ui-badge-secondary',
    'success' => 'ui-badge-success',
    'warning' => 'ui-badge-warning',
    'error' => 'ui-badge-error',
    'info' => 'ui-badge-info',
    default => 'ui-badge-default',
};
$sizeClass = match($size) { 'sm' => 'ui-badge-sm', 'md' => 'ui-badge-md', 'lg' => 'ui-badge-lg', default => 'ui-badge-md' };
@endphp

<span class="ui-badge {{ $variantClass }} {{ $sizeClass }} {{ $pulse ? 'ui-badge-pulse' : '' }} {{ $dot ? 'ui-badge-dot' : '' }}">
    {{ $slot }}
</span>