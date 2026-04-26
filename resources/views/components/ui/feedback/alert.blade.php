@props(['variant' => 'info', 'dismissible' => false, 'icon' => null, 'title' => null])

@php
$variantClass = match($variant) {
    'primary' => 'ui-alert-primary',
    'success' => 'ui-alert-success',
    'warning' => 'ui-alert-warning',
    'error' => 'ui-alert-error',
    'info' => 'ui-alert-info',
    default => 'ui-alert-info',
};
@endphp

<div class="ui-alert {{ $variantClass }} {{ $dismissible ? 'ui-alert-dismissible' : '' }}" role="alert">
    @if($icon)
    <span class="ui-alert-icon">{!! $icon !!}</span>
    @endif
    <div class="ui-alert-content">
        @if($title)
        <h4 class="ui-alert-title">{{ $title }}</h4>
        @endif
        <div class="ui-alert-message">{{ $slot }}</div>
    </div>
    @if($dismissible)
    <button type="button" class="ui-alert-close">✕</button>
    @endif
</div>