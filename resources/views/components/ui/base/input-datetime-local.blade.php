@props(['label' => null, 'error' => null, 'disabled' => false, 'required' => false, 'value' => '', 'min' => null, 'max' => null, 'size' => 'md'])

@php
$classes = 'ui-input-datetime';
$classes .= match($size) { 'sm' => ' ui-input-datetime-sm', 'md' => ' ui-input-datetime-md', 'lg' => ' ui-input-datetime-lg', default => '' };
if ($error) $classes .= ' ui-input-error';
if ($disabled) $classes .= ' ui-input-disabled';
@endphp

<div class="ui-input-wrapper">
    @if($label)<label class="ui-input-label">{{ $label }}@if($required)<span class="ui-input-required">*</span>@endif</label>@endif
    <input 
        type="datetime-local"
        name="{{ $name ?? '' }}"
        id="{{ $id ?? $name ?? '' }}"
        value="{{ $value }}"
        class="{{ $classes }}"
        min="{{ $min }}"
        max="{{ $max }}"
        @if($disabled)disabled @endif
        @if($required)required @endif
        {{ $attributes }}
    />
    @if($error)<p class="ui-input-error-message">{{ $error }}</p>@endif
</div>