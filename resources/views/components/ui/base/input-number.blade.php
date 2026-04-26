@props([
    'label' => null,
    'placeholder' => '',
    'error' => null,
    'disabled' => false,
    'required' => false,
    'value' => '',
    'min' => null,
    'max' => null,
    'step' => 1,
    'size' => 'md',
    'variant' => 'default',
])

@php
$classes = 'ui-input-number';
$classes .= match($size) {
    'sm' => ' ui-input-number-sm',
    'md' => ' ui-input-number-md',
    'lg' => ' ui-input-number-lg',
    default => '',
};
$classes .= match($variant) {
    'primary' => ' ui-input-number-primary',
    'secondary' => ' ui-input-number-secondary',
    'success' => ' ui-input-number-success',
    'error' => ' ui-input-number-error',
    default => '',
};
if ($error) $classes .= ' ui-input-error';
if ($disabled) $classes .= ' ui-input-disabled';
@endphp

<div class="ui-input-wrapper">
    @if($label)
    <label class="ui-input-label">{{ $label }}@if($required)<span class="ui-input-required">*</span>@endif</label>
    @endif

    <div class="ui-input-number-wrapper">
        <button type="button" class="ui-input-number-decrement" @if($disabled)disabled @endif>−</button>
        <input 
            type="number"
            name="{{ $name ?? '' }}"
            id="{{ $id ?? $name ?? '' }}"
            value="{{ $value }}"
            placeholder="{{ $placeholder }}"
            class="{{ $classes }}"
            min="{{ $min }}"
            max="{{ $max }}"
            step="{{ $step }}"
            @if($disabled)disabled @endif
            @if($required)required @endif
            {{ $attributes }}
        />
        <button type="button" class="ui-input-number-increment" @if($disabled)disabled @endif>+</button>
    </div>

    @if($error)
    <p class="ui-input-error-message">{{ $error }}</p>
    @endif
</div>