@props(['size' => 'md', 'disabled' => false, 'glow' => false])

@php
$sizeClass = match($size) {
    'sm' => 'ui-btn-fab-sm', 'md' => 'ui-btn-fab-md', 'lg' => 'ui-btn-fab-lg', 'xl' => 'ui-btn-fab-xl', default => 'ui-btn-fab-md',
};
@endphp

<button type="button" class="ui-btn-fab {{ $sizeClass }} {{ $glow ? 'ui-btn-fab-glow' : '' }} {{ $disabled ? 'ui-btn-disabled' : '' }}" {{ $disabled ? 'disabled' : '' }} {{ $attributes }}>
    {{ $slot }}
</button>