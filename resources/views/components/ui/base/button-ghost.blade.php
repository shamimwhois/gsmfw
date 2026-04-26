@props(['variant' => 'primary', 'size' => 'md', 'disabled' => false, 'glow' => false])

@php
$variantClass = match($variant) {
    'primary' => 'ui-btn-primary', 'secondary' => 'ui-btn-secondary', 'danger' => 'ui-btn-danger',
    default => 'ui-btn-primary',
};
$sizeClass = match($size) {
    'xs' => 'ui-btn-xs', 'sm' => 'ui-btn-sm', 'md' => 'ui-btn-md', default => 'ui-btn-md',
};
@endphp

<button type="button" class="ui-button-ghost {{ $variantClass }} {{ $sizeClass }} {{ $glow ? 'ui-btn-glow' : '' }} {{ $disabled ? 'ui-btn-disabled' : '' }}" {{ $disabled ? 'disabled' : '' }} {{ $attributes }}>
    {{ $slot }}
</button>