@props([
    'type' => 'text',
    'label' => null,
    'placeholder' => '',
    'error' => null,
    'disabled' => false,
    'required' => false,
    'icon' => null,
    'value' => '',
    'variant' => 'default',
    'size' => 'md',
    'glow' => false,
    'name' => null,
    'id' => null,
])

@php
$inputClasses = 'ui-input';
$inputClasses .= match($variant) {
    'primary' => ' ui-input-primary',
    'secondary' => ' ui-input-secondary',
    'success' => ' ui-input-success',
    'warning' => ' ui-input-warning',
    'error' => ' ui-input-error',
    default => '',
};
$inputClasses .= match($size) {
    'sm' => ' ui-input-sm',
    'md' => ' ui-input-md',
    'lg' => ' ui-input-lg',
    'xl' => ' ui-input-xl',
    default => '',
};
if ($error) $inputClasses .= ' ui-input-error';
if ($disabled) $inputClasses .= ' ui-input-disabled';
if ($glow) $inputClasses .= ' ui-input-glow';
@endphp

<div class="ui-input-wrapper">
    @if($label)
    <label class="ui-input-label">
        {{ $label }}
        @if($required)<span class="ui-input-required">*</span>@endif
    </label>
    @endif
    
    <div class="ui-input-group">
        @if($icon)
        <span class="ui-input-icon">{!! $icon !!}</span>
        @endif
        <input 
            type="{{ $type }}"
            name="{{ $name }}"
            id="{{ $id ?? $name }}"
            value="{{ $value }}"
            placeholder="{{ $placeholder }}"
            class="{{ $inputClasses }} {{ $icon ? 'ui-input-with-icon' : '' }}"
            @if($disabled)disabled @endif
            @if($required)required @endif
            {{ $attributes }}
        />
    </div>

    @if($error)
    <p class="ui-input-error-message">{{ $error }}</p>
    @endif
</div>