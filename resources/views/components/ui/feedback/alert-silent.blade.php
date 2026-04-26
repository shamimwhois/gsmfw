@props(['variant' => 'info', 'icon' => null])

@php
$variantClass = match($variant) { 'success' => 'ui-alert-silent-success', 'warning' => 'ui-alert-silent-warning', 'error' => 'ui-alert-silent-error', 'info' => 'ui-alert-silent-info', default => 'ui-alert-silent-info' };
@endphp

<div class="ui-alert-silent {{ $variantClass }}">
    {{ $slot }}
</div>