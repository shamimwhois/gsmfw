@props(['value' => 0, 'size' => 'md', 'showLabel' => false, 'label' => 'Count'])

@php
$sizeClass = match($size) { 'sm' => 'ui-counter-sm', 'md' => 'ui-counter-md', 'lg' => 'ui-counter-lg', default => 'ui-counter-md' };
@endphp

<div class="ui-counter {{ $sizeClass }}">
    <span class="ui-counter-value">{{ $value }}</span>
    @if($showLabel)
    <span class="ui-counter-label">{{ $label }}</span>
    @endif
</div>