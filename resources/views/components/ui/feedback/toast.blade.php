@props(['variant' => 'info', 'title' => null, 'duration' => 3000, 'dismissible' => true])

@php
$variantClass = match($variant) { 'success' => 'ui-toast-success', 'warning' => 'ui-toast-warning', 'error' => 'ui-toast-error', 'info' => 'ui-toast-info', default => 'ui-toast-info' };
@endphp

<div class="ui-toast {{ $variantClass }}" role="alert" data-duration="{{ $duration }}">
    @if($title)
    <strong class="ui-toast-title">{{ $title }}</strong>
    @endif
    <p class="ui-toast-message">{{ $slot }}</p>
    @if($dismissible)
    <button type="button" class="ui-toast-close">✕</button>
    @endif
</div>