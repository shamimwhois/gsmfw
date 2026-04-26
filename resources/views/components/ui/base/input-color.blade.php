@props(['label' => null, 'error' => null, 'disabled' => false, 'required' => false, 'value' => '#000000', 'size' => 'md'])

@php
$classes = 'ui-input-color';
$classes .= match($size) { 'sm' => ' ui-input-color-sm', 'md' => ' ui-input-color-md', 'lg' => ' ui-input-color-lg', default => '' };
if ($error) $classes .= ' ui-input-error';
if ($disabled) $classes .= ' ui-input-disabled';
@endphp

<div class="ui-input-wrapper">
    @if($label)<label class="ui-input-label">{{ $label }}@if($required)<span class="ui-input-required">*</span>@endif</label>@endif
    <div class="ui-input-color-wrapper">
        <input 
            type="color"
            name="{{ $name ?? '' }}"
            id="{{ $id ?? $name ?? '' }}"
            value="{{ $value }}"
            class="{{ $classes }}"
            @if($disabled)disabled @endif
            @if($required)required @endif
            {{ $attributes }}
        />
        <input type="text" class="ui-input-color-text" value="{{ $value }}">
    </div>
    @if($error)<p class="ui-input-error-message">{{ $error }}</p>@endif
</div>