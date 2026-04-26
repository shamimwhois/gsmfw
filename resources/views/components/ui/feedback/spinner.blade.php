@props(['size' => 'md', 'variant' => 'default', 'label' => 'Loading'])

@php
$sizeClass = match($size) { 'sm' => 'ui-spinner-sm', 'md' => 'ui-spinner-md', 'lg' => 'ui-spinner-lg', 'xl' => 'ui-spinner-xl', default => 'ui-spinner-md' };
$variantClass = match($variant) { 'primary' => 'ui-spinner-primary', 'secondary' => 'ui-spinner-secondary', 'light' => 'ui-spinner-light', 'dark' => 'ui-spinner-dark', default => 'ui-spinner-default' };
@endphp

<div class="ui-spinner {{ $sizeClass }} {{ $variantClass }}" role="status">
    <span class="ui-spinner-icon"></span>
    @if($label)
    <span class="ui-spinner-label">{{ $label }}</span>
    @endif
</div>