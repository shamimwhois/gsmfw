@props(['variant' => 'default', 'lines' => 2, 'width' => null, 'animated' => true])

@php
$variantClass = match($variant) { 'primary' => 'ui-skeleton-text-primary', 'secondary' => 'ui-skeleton-text-secondary', default => 'ui-skeleton-text-default' };
@endphp

<div class="ui-skeleton-text {{ $variantClass }} {{ $animated ? 'ui-skeleton-text-animated' : '' }}" {{ $attributes }}>
    @for($i = 0; $i < $lines; $i++)
    <span class="ui-skeleton-text-line" @if($width && $i == $lines - 1) style="width: {{ $width }}"@endif></span>
    @endfor
</div>