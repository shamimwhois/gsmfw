@props(['label' => null, 'placeholder' => '', 'error' => null, 'disabled' => false, 'required' => false, 'value' => '', 'size' => 'md', 'readonly' => false])

@php
$classes = 'ui-input-password';
$classes .= match($size) { 'sm' => ' ui-input-password-sm', 'md' => ' ui-input-password-md', 'lg' => ' ui-input-password-lg', default => '' };
if ($error) $classes .= ' ui-input-error';
if ($disabled) $classes .= ' ui-input-disabled';
@endphp

<div class="ui-input-wrapper">
    @if($label)<label class="ui-input-label">{{ $label }}@if($required)<span class="ui-input-required">*</span>@endif</label>@endif
    <div class="ui-input-group">
        <input 
            type="password"
            name="{{ $name ?? '' }}"
            id="{{ $id ?? $name ?? '' }}"
            value="{{ $value }}"
            placeholder="{{ $placeholder }}"
            class="{{ $classes }}"
            @if($disabled)disabled @endif
            @if($required)required @endif
            @if($readonly)readonly @endif
            {{ $attributes }}
        />
        <button type="button" class="ui-input-password-toggle" onclick="this.previousElementSibling.type = this.previousElementSibling.type === 'password' ? 'text' : 'password'">👁</button>
    </div>
    @if($error)<p class="ui-input-error-message">{{ $error }}</p>@endif
</div>