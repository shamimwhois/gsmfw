@props(['variant' => 'primary', 'size' => 'md', 'disabled' => false, 'glow' => false, 'icon' => null])

@php
$variantClass = match($variant) {
    'primary' => 'ui-btn-primary', 'secondary' => 'ui-btn-secondary', 'ghost' => 'ui-btn-ghost',
    'danger' => 'ui-btn-danger', 'success' => 'ui-btn-success', default => 'ui-btn-primary',
};
$sizeClass = match($size) {
    'xs' => 'ui-btn-xs', 'sm' => 'ui-btn-sm', 'md' => 'ui-btn-md', 'lg' => 'ui-btn-lg', default => 'ui-btn-md',
};
@endphp

<button type="button" class="ui-btn-icon-only {{ $variantClass }} {{ $sizeClass }} {{ $glow ? 'ui-btn-glow' : '' }} {{ $disabled ? 'ui-btn-disabled' : '' }}" {{ $disabled ? 'disabled' : '' }} {{ $attributes }}>
    @if($icon)<span class="ui-btn-icon">{!! $icon !!}</span>@else{{ $slot }}@endif
</button>