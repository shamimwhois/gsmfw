@props(['value' => 0, 'max' => 100, 'size' => 'md', 'showLabel' => true, 'variant' => 'default'])

@php
$sizeClass = match($size) { 'sm' => 'ui-progress-sm', 'md' => 'ui-progress-md', 'lg' => 'ui-progress-lg', default => 'ui-progress-md' };
$variantClass = match($variant) { 'primary' => 'ui-progress-primary', 'success' => 'ui-progress-success', 'warning' => 'ui-progress-warning', 'error' => 'ui-progress-error', default => 'ui-progress-default' };
@endphp

<div class="ui-progress {{ $sizeClass }} {{ $variantClass }}" role="progressbar" aria-valuenow="{{ $value }}" aria-valuemin="0" aria-valuemax="{{ $max }}">
    <div class="ui-progress-bar" style="width: {{ ($value / $max) * 100 }}%">
        @if($showLabel)
        <span class="ui-progress-label">{{ $value }}%</span>
        @endif
    </div>
</div>