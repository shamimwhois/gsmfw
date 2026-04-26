@props(['disabled' => false, 'glow' => false, 'icon' => null, 'size' => 'md', 'variant' => 'primary'])

@php
$sizeClass = match($size) { 'sm' => 'ui-action-button-sm', 'md' => 'ui-action-button-md', 'lg' => 'ui-action-button-lg', default => 'ui-action-button-md' };
$variantClass = match($variant) { 'primary' => 'ui-action-primary', 'secondary' => 'ui-action-secondary', 'danger' => 'ui-action-danger', default => 'ui-action-primary' };
@endphp

<button type="button" class="ui-action-button {{ $variantClass }} {{ $sizeClass }} {{ $glow ? 'ui-action-button-glow' : '' }} {{ $disabled ? 'ui-action-button-disabled' : '' }}" {{ $disabled ? 'disabled' : '' }} {{ $attributes }}>
    @if($icon)<span class="ui-action-button-icon">{!! $icon !!}</span>@endif
    {{ $slot }}
</button>