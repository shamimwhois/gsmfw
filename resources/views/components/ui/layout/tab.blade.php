@props(['active' => false, 'disabled' => false, 'size' => 'md'])

@php
$sizeClass = match($size) { 'sm' => 'ui-tab-sm', 'md' => 'ui-tab-md', 'lg' => 'ui-tab-lg', default => 'ui-tab-md' };
@endphp

<button type="button" class="ui-tab {{ $sizeClass }} {{ $active ? 'ui-tab-active' : '' }} {{ $disabled ? 'ui-tab-disabled' : '' }}" role="tab" {{ $disabled ? 'disabled' : '' }} {{ $attributes }}>
    {{ $slot }}
</button>