@props(['variant' => 'primary', 'size' => 'md', 'disabled' => false, 'href' => null, 'glow' => false, 'icon' => null])

@php
$variantClass = match($variant) {
    'primary' => 'ui-btn-primary',
    'secondary' => 'ui-btn-secondary',
    'ghost' => 'ui-btn-ghost',
    'danger' => 'ui-btn-danger',
    'success' => 'ui-btn-success',
    'warning' => 'ui-btn-warning',
    'info' => 'ui-btn-info',
    'outline' => 'ui-btn-outline',
    'link' => 'ui-btn-link',
    default => 'ui-btn-primary',
};
$sizeClass = match($size) {
    'xs' => 'ui-btn-xs', 'sm' => 'ui-btn-sm', 'md' => 'ui-btn-md', 'lg' => 'ui-btn-lg', 'xl' => 'ui-btn-xl',
    default => 'ui-btn-md',
};
@endphp

@if($href)
<a href="{{ $href }}" class="ui-btn {{ $variantClass }} {{ $sizeClass }} {{ $glow ? 'ui-btn-glow' : '' }} {{ $disabled ? 'ui-btn-disabled' : '' }}">
    @if($icon)<span class="ui-btn-icon">{!! $icon !!}</span>@endif
    {{ $slot }}
</a>
@else
<button type="button" class="ui-btn {{ $variantClass }} {{ $sizeClass }} {{ $glow ? 'ui-btn-glow' : '' }} {{ $disabled ? 'ui-btn-disabled' : '' }}" {{ $disabled ? 'disabled' : '' }} {{ $attributes }}>
    @if($icon)<span class="ui-btn-icon">{!! $icon !!}</span>@endif
    {{ $slot }}
</button>
@endif