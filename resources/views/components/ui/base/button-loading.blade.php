@props(['variant' => 'primary', 'size' => 'md', 'disabled' => false, 'glow' => false, 'loading' => false])

@php
$variantClass = match($variant) {
    'primary' => 'ui-btn-primary', 'secondary' => 'ui-btn-secondary', 'ghost' => 'ui-btn-ghost',
    'danger' => 'ui-btn-danger', default => 'ui-btn-primary',
};
$sizeClass = match($size) {
    'xs' => 'ui-btn-xs', 'sm' => 'ui-btn-sm', 'md' => 'ui-btn-md', 'lg' => 'ui-btn-lg', default => 'ui-btn-md',
};
@endphp

<button type="button" class="ui-button-loading {{ $variantClass }} {{ $sizeClass }} {{ $glow ? 'ui-btn-glow' : '' }} {{ $disabled ? 'ui-btn-disabled' : '' }} {{ $loading ? 'ui-button-loading-active' : '' }}" {{ $disabled ? 'disabled' : '' }} {{ $attributes }}>
    @if($loading)<span class="ui-button-loading-spinner"></span>@endif
    {{ $slot }}
</button>