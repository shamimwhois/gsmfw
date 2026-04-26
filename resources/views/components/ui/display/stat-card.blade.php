@props(['value' => null, 'label' => null, 'icon' => null, 'trend' => null, 'variant' => 'default', 'size' => 'md'])

@php
$variantClass = match($variant) { 'primary' => 'ui-stat-card-primary', 'success' => 'ui-stat-card-success', 'warning' => 'ui-stat-card-warning', 'error' => 'ui-stat-card-error', default => 'ui-stat-card-default' };
$sizeClass = match($size) { 'sm' => 'ui-stat-card-sm', 'md' => 'ui-stat-card-md', 'lg' => 'ui-stat-card-lg', default => 'ui-stat-card-md' };
@endphp

<div class="ui-stat-card {{ $variantClass }} {{ $sizeClass }}">
    @if($icon)
    <div class="ui-stat-card-icon">{!! $icon !!}</div>
    @endif
    <div class="ui-stat-card-content">
        @if($value)
        <div class="ui-stat-card-value">{{ $value }}</div>
        @endif
        @if($label)
        <div class="ui-stat-card-label">{{ $label }}</div>
        @endif
        @if($trend)
        <div class="ui-stat-card-trend">{{ $trend }}%</div>
        @endif
    </div>
</div>