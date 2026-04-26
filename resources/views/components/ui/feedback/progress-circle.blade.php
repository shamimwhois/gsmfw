@props(['value' => 0, 'max' => 100, 'size' => 'md', 'stroke' => 4, 'variant' => 'default'])

@php
$sizeClass = match($size) { 'sm' => 'ui-progress-circle-sm', 'md' => 'ui-progress-circle-md', 'lg' => 'ui-progress-circle-lg', default => 'ui-progress-circle-md' };
$variantClass = match($variant) { 'primary' => 'ui-progress-circle-primary', 'success' => 'ui-progress-circle-success', 'warning' => 'ui-progress-circle-warning', 'error' => 'ui-progress-circle-error', default => 'ui-progress-circle-default' };
@endphp

<div class="ui-progress-circle {{ $sizeClass }} {{ $variantClass }}">
    <svg viewBox="0 0 36 36">
        <circle class="ui-progress-circle-track" cx="18" cy="18" r="15.9" fill="none" stroke-width="{{ $stroke }}"></circle>
        <circle class="ui-progress-circle-fill" cx="18" cy="18" r="15.9" fill="none" stroke-width="{{ $stroke }}" stroke-dasharray="{{ ($value / $max) * 100 }}, 100"></circle>
    </svg>
    <span class="ui-progress-circle-label">{{ round(($value / $max) * 100) }}%</span>
</div>