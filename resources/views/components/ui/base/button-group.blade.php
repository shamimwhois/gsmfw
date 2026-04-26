@props(['variant' => 'primary', 'size' => 'md', 'disabled' => false, 'glow' => false, 'icon' => null])

@php
$variantClass = match($variant) {
    'primary' => 'ui-btn-group-primary',
    'secondary' => 'ui-btn-group-secondary',
    'outline' => 'ui-btn-group-outline',
    default => 'ui-btn-group-primary',
};
$sizeClass = match($size) {
    'xs' => 'ui-btn-group-xs', 'sm' => 'ui-btn-group-sm', 'md' => 'ui-btn-group-md', 'lg' => 'ui-btn-group-lg', default => 'ui-btn-group-md',
};
@endphp

<div class="ui-button-group {{ $variantClass }} {{ $sizeClass }}">
    {{ $slot }}
</div>