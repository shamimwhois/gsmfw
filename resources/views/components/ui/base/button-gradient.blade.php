@props(['variant' => 'primary', 'size' => 'md', 'disabled' => false, 'glow' => false, 'direction' => 'right'])

@php
$sizeClass = match($size) {
    'xs' => 'ui-btn-xs', 'sm' => 'ui-btn-sm', 'md' => 'ui-btn-md', 'lg' => 'ui-btn-lg', default => 'ui-btn-md',
};
$gradientClass = 'ui-btn-gradient-' . $direction;
@endphp

<button type="button" class="ui-button-gradient {{ $gradientClass }} {{ $sizeClass }} {{ $glow ? 'ui-btn-glow' : '' }} {{ $disabled ? 'ui-btn-disabled' : '' }}" {{ $disabled ? 'disabled' : '' }} {{ $attributes }}>
    {{ $slot }}
</button>