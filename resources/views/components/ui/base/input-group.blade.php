@props([
    'label' => null,
    'error' => null,
    'disabled' => false,
    'required' => false,
    'icon' => null,
    'addonBefore' => null,
    'addonAfter' => null,
    'size' => 'md',
])

@php
$classes = 'ui-input-group';
$classes .= match($size) {
    'sm' => ' ui-input-group-sm',
    'md' => ' ui-input-group-md',
    'lg' => ' ui-input-group-lg',
    default => '',
};
if ($disabled) $classes .= ' ui-input-group-disabled';
@endphp

<div class="ui-input-wrapper">
    @if($label)
    <label class="ui-input-label">
        {{ $label }}
        @if($required)<span class="ui-input-required">*</span>@endif
    </label>
    @endif

    <div class="{{ $classes }}">
        @if($addonBefore)
        <span class="ui-input-group-addon ui-input-group-addon-before">{!! $addonBefore !!}</span>
        @endif
        
        {{ $slot }}
        
        @if($addonAfter)
        <span class="ui-input-group-addon ui-input-group-addon-after">{!! $addonAfter !!}</span>
        @endif
    </div>

    @if($error)
    <p class="ui-input-error-message">{{ $error }}</p>
    @endif
</div>