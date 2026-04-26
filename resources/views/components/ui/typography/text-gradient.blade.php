@props(['gradient' => null])

@php
$gradientClass = match($gradient) { 'primary' => 'ui-text-gradient-primary', 'success' => 'ui-text-gradient-success', 'warning' => 'ui-text-gradient-warning', 'error' => 'ui-text-gradient-error', 'rainbow' => 'ui-text-gradient-rainbow', default => 'ui-text-gradient-default' };
@endphp

<span class="ui-text-gradient {{ $gradientClass }}">
    {{ $slot }}
</span>