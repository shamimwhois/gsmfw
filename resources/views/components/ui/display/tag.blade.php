@props(['variant' => 'default', 'size' => 'md', 'removable' => false])

@php
$variantClass = match($variant) { 'primary' => 'ui-tag-primary', 'secondary' => 'ui-tag-secondary', 'success' => 'ui-tag-success', 'warning' => 'ui-tag-warning', 'error' => 'ui-tag-error', default => 'ui-tag-default' };
$sizeClass = match($size) { 'sm' => 'ui-tag-sm', 'md' => 'ui-tag-md', 'lg' => 'ui-tag-lg', default => 'ui-tag-md' };
@endphp

<span class="ui-tag {{ $variantClass }} {{ $sizeClass }}">
    {{ $slot }}
    @if($removable)
    <button type="button" class="ui-tag-close">✕</button>
    @endif
</span>