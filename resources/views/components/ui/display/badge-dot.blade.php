@props(['variant' => 'default', 'size' => 'sm', 'pulse' => true])

@php
$variantClass = match($variant) { 'primary' => 'ui-badge-dot-primary', 'success' => 'ui-badge-dot-success', 'error' => 'ui-badge-dot-error', 'warning' => 'ui-badge-dot-warning', default => 'ui-badge-dot-default' };
$sizeClass = match($size) { 'sm' => 'ui-badge-dot-sm', 'md' => 'ui-badge-dot-md', default => 'ui-badge-dot-sm' };
@endphp

<span class="ui-badge-dot {{ $variantClass }} {{ $sizeClass }} {{ $pulse ? 'ui-badge-dot-pulse' : '' }}">
    <span class="ui-badge-dot-indicator"></span>
    {{ $slot }}
</span>