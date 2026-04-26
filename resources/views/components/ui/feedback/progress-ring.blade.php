@props(['value' => 0, 'max' => 100, 'size' => 'md', 'stroke' => 4, 'variant' => 'default'])

@php
$sizeClass = match($size) { 'sm' => 'ui-progress-ring-sm', 'md' => 'ui-progress-ring-md', 'lg' => 'ui-progress-ring-lg', default => 'ui-progress-ring-md' };
$variantClass = match($variant) { 'primary' => 'ui-progress-ring-primary', 'success' => 'ui-progress-ring-success', 'warning' => 'ui-progress-ring-warning', 'error' => 'ui-progress-ring-error', default => 'ui-progress-ring-default' };
@endphp

<div class="ui-progress-ring {{ $sizeClass }} {{ $variantClass }}">
    <svg viewBox="0 0 64 64">
        <circle class="ui-progress-ring-track" cx="32" cy="32" r="28" fill="none" stroke-width="{{ $stroke }}"></circle>
        <circle class="ui-progress-ring-fill" cx="32" cy="32" r="28" fill="none" stroke-width="{{ $stroke }}" stroke-dasharray="{{ ($value / $max) * 175 }}, 175"></circle>
    </svg>
    <span class="ui-progress-ring-value">{{ $value }}</span>
</div>