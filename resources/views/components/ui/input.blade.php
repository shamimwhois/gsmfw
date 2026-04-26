@props(['type' => 'text', 'name' => null, 'label' => null, 'placeholder' => '', 'error' => null, 'disabled' => false, 'required' => false, 'icon' => null, 'value' => ''])

@php
$inputClasses = 'form-input';
if ($error) $inputClasses .= ' has-error';
if ($disabled) $inputClasses .= ' is-disabled';
if ($icon) $inputClasses .= ' has-icon';
@endphp

<div class="form-group">
    @if($label)
    <label class="form-label">
        {{ $label }}
        @if($required)<span class="required">*</span>@endif
    </label>
    @endif
    
    <div class="input-wrapper">
        @if($icon)
        <span class="input-icon">{!! $icon !!}</span>
        @endif
        <input 
            type="{{ $type }}"
            name="{{ $name }}"
            id="{{ $name }}"
            value="{{ $value }}"
            placeholder="{{ $placeholder }}"
            class="{{ $inputClasses }}"
            @if($disabled)disabled @endif
            @if($required)required @endif
            {{ $attributes }}
        />
    </div>

    @if($error)
    <p class="form-error">{{ $error }}</p>
    @endif
</div>