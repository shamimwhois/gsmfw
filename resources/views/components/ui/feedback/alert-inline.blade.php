@props(['variant' => 'info', 'icon' => null])

@php
$variantClass = match($variant) { 'success' => 'ui-alert-inline-success', 'warning' => 'ui-alert-inline-warning', 'error' => 'ui-alert-inline-error', 'info' => 'ui-alert-inline-info', default => 'ui-alert-inline-info' };
@endphp

<span class="ui-alert-inline {{ $variantClass }}">
    @if($icon)
    <span class="ui-alert-inline-icon">{!! $icon !!}</span>
    @endif
    {{ $slot }}
</span>