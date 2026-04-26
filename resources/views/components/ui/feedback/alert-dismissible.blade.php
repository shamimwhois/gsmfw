@props(['variant' => 'info', 'dismissible' => true, 'icon' => null, 'title' => null])

@php
$variantClass = match($variant) { 'success' => 'ui-alert-dismissible-success', 'warning' => 'ui-alert-dismissible-warning', 'error' => 'ui-alert-dismissible-error', 'info' => 'ui-alert-dismissible-info', default => 'ui-alert-dismissible-info' };
@endphp

<div class="ui-alert-dismissible {{ $variantClass }}" role="alert">
    @if($icon)
    <span class="ui-alert-dismissible-icon">{!! $icon !!}</span>
    @endif
    <div class="ui-alert-dismissible-content">
        @if($title)
        <h4 class="ui-alert-dismissible-title">{{ $title }}</h4>
        @endif
        <div class="ui-alert-dismissible-message">{{ $slot }}</div>
    </div>
    @if($dismissible)
    <button type="button" class="ui-alert-dismissible-close">✕</button>
    @endif
</div>