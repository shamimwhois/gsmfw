@props(['variant' => 'default', 'size' => 'md', 'hoverable' => false, 'bordered' => false, 'shadowed' => false])

@php
$variantClass = match($variant) { 'primary' => 'ui-card-primary', 'secondary' => 'ui-card-secondary', 'success' => 'ui-card-success', 'warning' => 'ui-card-warning', 'error' => 'ui-card-error', default => 'ui-card-default' };
$sizeClass = match($size) { 'sm' => 'ui-card-sm', 'md' => 'ui-card-md', 'lg' => 'ui-card-lg', default => 'ui-card-md' };
@endphp

<article class="ui-card {{ $variantClass }} {{ $sizeClass }} {{ $hoverable ? 'ui-card-hoverable' : '' }} {{ $bordered ? 'ui-card-bordered' : '' }} {{ $shadowed ? 'ui-card-shadowed' : '' }}" {{ $attributes }}>
    {{ $slot }}
</article>