@props(['label' => null, 'placeholder' => '', 'error' => null, 'disabled' => false, 'required' => false, 'value' => '', 'size' => 'md'])

@php
$classes = 'ui-input-email';
$classes .= match($size) { 'sm' => ' ui-input-email-sm', 'md' => ' ui-input-email-md', 'lg' => ' ui-input-email-lg', default => '' };
if ($error) $classes .= ' ui-input-error';
if ($disabled) $classes .= ' ui-input-disabled';
@endphp

<div class="ui-input-wrapper">
    @if($label)<label class="ui-input-label">{{ $label }}@if($required)<span class="ui-input-required">*</span>@endif</label>@endif
    <input 
        type="email"
        name="{{ $name ?? '' }}"
        id="{{ $id ?? $name ?? '' }}"
        value="{{ $value }}"
        placeholder="{{ $placeholder }}"
        class="{{ $classes }}"
        @if($disabled)disabled @endif
        @if($required)required @endif
        {{ $attributes }}
    />
    @if($error)<p class="ui-input-error-message">{{ $error }}</p>@endif
</div>