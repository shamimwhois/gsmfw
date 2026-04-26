@props(['title' => null, 'variant' => 'default', 'icon' => null, 'read' => false, 'timestamp' => null])

@php
$variantClass = match($variant) { 'primary' => 'ui-notification-primary', 'success' => 'ui-notification-success', 'warning' => 'ui-notification-warning', 'error' => 'ui-notification-error', default => 'ui-notification-default' };
@endphp

<div class="ui-notification {{ $variantClass }} {{ $read ? 'ui-notification-read' : '' }}">
    @if($icon)
    <span class="ui-notification-icon">{!! $icon !!}</span>
    @endif
    <div class="ui-notification-content">
        @if($title)
        <h4 class="ui-notification-title">{{ $title }}</h4>
        @endif
        <p class="ui-notification-message">{{ $slot }}</p>
    </div>
    @if($timestamp)
    <span class="ui-notification-timestamp">{{ $timestamp }}</span>
    @endif
</div>