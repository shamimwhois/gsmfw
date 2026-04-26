@props(['value' => null, 'label' => null, 'icon' => null, 'trend' => null, 'size' => 'md'])

@php
$sizeClass = match($size) { 'sm' => 'ui-metric-sm', 'md' => 'ui-metric-md', 'lg' => 'ui-metric-lg', default => 'ui-metric-md' };
@endphp

<div class="ui-metric {{ $sizeClass }}">
    @if($icon)
    <div class="ui-metric-icon">{!! $icon !!}</div>
    @endif
    @if($value)
    <div class="ui-metric-value">{{ $value }}</div>
    @endif
    @if($label)
    <div class="ui-metric-label">{{ $label }}</div>
    @endif
    @if($trend)
    <div class="ui-metric-trend">{{ $trend }}</div>
    @endif
</div>