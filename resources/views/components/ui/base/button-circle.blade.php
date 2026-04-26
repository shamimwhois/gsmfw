@props(['variant' => 'primary', 'size' => 'md', 'disabled' => false, 'glow' => false])

@php
$variantClass = match($variant) {
    'primary' => 'ui-btn-primary', 'secondary' => 'ui-btn-secondary', 'default' => 'ui-btn-primary',
};
$sizeClass = match($size) {
    'xs' => 'ui-btn-xs', 'sm' => 'ui-btn-sm', 'md' => 'ui-btn-md', 'lg' => 'ui-btn-lg', 'xl' => 'ui-btn-xl',
    default => 'ui-btn-md',
};
@endphp

<button type="button" class="ui-button-circle {{ $variantClass }} {{ $sizeClass }} {{ $glow ? 'ui-btn-glow' : '' }} {{ $disabled ? 'ui-btn-disabled' : '' }}" {{ $disabled ? 'disabled' : '' }} {{ $attributes }}>
    {{ $slot }}
</button>