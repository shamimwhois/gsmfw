@props(['count' => 0, 'max' => 99, 'variant' => 'primary', 'size' => 'sm'])

@php
$variantClass = match($variant) { 'primary' => 'ui-badge-count-primary', 'secondary' => 'ui-badge-count-secondary', 'error' => 'ui-badge-count-error', default => 'ui-badge-count-primary' };
$sizeClass = match($size) { 'sm' => 'ui-badge-count-sm', 'md' => 'ui-badge-count-md', default => 'ui-badge-count-sm' };
$displayCount = $count > $max ? $max . '+' : $count;
@endphp

@if($count > 0)
<span class="ui-badge-count {{ $variantClass }} {{ $sizeClass }}">
    {{ $displayCount }}
</span>
@endif