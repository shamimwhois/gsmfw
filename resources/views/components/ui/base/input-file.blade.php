@props([
    'label' => null,
    'placeholder' => 'Choose file',
    'error' => null,
    'disabled' => false,
    'required' => false,
    'accept' => '*',
    'multiple' => false,
    'size' => 'md',
])

@php
$classes = 'ui-input-file';
$classes .= match($size) {
    'sm' => ' ui-input-file-sm',
    'md' => ' ui-input-file-md',
    'lg' => ' ui-input-file-lg',
    default => '',
};
if ($error) $classes .= ' ui-input-file-error';
if ($disabled) $classes .= ' ui-input-file-disabled';
@endphp

<div class="ui-input-file-wrapper">
    @if($label)
    <label class="ui-input-label">
        {{ $label }}
        @if($required)<span class="ui-input-required">*</span>@endif
    </label>
    @endif
    
    <label class="{{ $classes }}">
        <input 
            type="file"
            name="{{ $name ?? '' }}"
            id="{{ $id ?? $name ?? '' }}"
            accept="{{ $accept }}"
            @if($multiple)multiple @endif
            @if($disabled)disabled @endif
            @if($required)required @endif
            {{ $attributes }}
        />
        <span class="ui-input-file-trigger">
            <span class="ui-input-file-icon">📁</span>
            <span class="ui-input-file-text">{{ $placeholder }}</span>
        </span>
    </label>

    @if($error)
    <p class="ui-input-error-message">{{ $error }}</p>
    @endif
</div>