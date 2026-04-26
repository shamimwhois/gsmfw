@props(['variant' => 'info', 'icon' => null])

@php
$variantClass = match($variant) { 'success' => 'ui-alert-toast-success', 'warning' => 'ui-alert-toast-warning', 'error' => 'ui-alert-toast-error', 'info' => 'ui-alert-toast-info', default => 'ui-alert-toast-info' };
@endphp

<div class="ui-alert-toast {{ $variantClass }}" role="alert">
    @if($icon)
    <span class="ui-alert-toast-icon">{!! $icon !!}</span>
    @endif
    <div class="ui-alert-toast-content">{{ $slot }}</div>
</div>