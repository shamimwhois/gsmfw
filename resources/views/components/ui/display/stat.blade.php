@props(['value' => null, 'label' => null, 'icon' => null, 'trend' => null, 'size' => 'md'])

@php
$sizeClass = match($size) { 'sm' => 'ui-stat-sm', 'md' => 'ui-stat-md', 'lg' => 'ui-stat-lg', default => 'ui-stat-md' };
@endphp

<div class="ui-stat {{ $sizeClass }}">
    @if($icon)
    <div class="ui-stat-icon">{!! $icon !!}</div>
    @endif
    @if($value)
    <div class="ui-stat-value">{{ $value }}</div>
    @endif
    @if($label)
    <div class="ui-stat-label">{{ $label }}</div>
    @endif
    @if($trend)
    <div class="ui-stat-trend {{ $trend > 0 ? 'ui-stat-trend-up' : ($trend < 0 ? 'ui-stat-trend-down' : '') }}">{{ $trend > 0 ? '↑' : ($trend < 0 ? '↓' : '→') }} {{ abs($trend) }}%</div>
    @endif
</div>