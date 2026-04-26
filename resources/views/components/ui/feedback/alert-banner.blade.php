@props(['variant' => 'info', 'dismissible' => false, 'icon' => null])

@php
$variantClass = match($variant) { 'success' => 'ui-alert-banner-success', 'warning' => 'ui-alert-banner-warning', 'error' => 'ui-alert-banner-error', 'info' => 'ui-alert-banner-info', default => 'ui-alert-banner-info' };
@endphp

<div class="ui-alert-banner {{ $variantClass }}" role="alert">
    @if($icon)
    <span class="ui-alert-banner-icon">{!! $icon !!}</span>
    @endif
    <div class="ui-alert-banner-content">{{ $slot }}</div>
    @if($dismissible)
    <button type="button" class="ui-alert-banner-close">✕</button>
    @endif
</div>