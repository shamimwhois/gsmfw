@props(['label' => null, 'checked' => false, 'disabled' => false, 'error' => null, 'size' => 'md', 'value' => '1'])

@php
$classes = 'ui-checkbox-switch';
$classes .= match($size) { 'sm' => ' ui-checkbox-switch-sm', 'md' => ' ui-checkbox-switch-md', 'lg' => ' ui-checkbox-switch-lg', default => '' };
if ($checked) $classes .= ' ui-checkbox-switch-checked';
if ($disabled) $classes .= ' ui-checkbox-switch-disabled';
@endphp

<div class="ui-checkbox-switch-wrapper">
    <label class="{{ $classes }}">
        <input 
            type="checkbox"
            name="{{ $name ?? '' }}"
            id="{{ $id ?? $name ?? '' }}"
            value="{{ $value }}"
            @if($checked)checked @endif
            @if($disabled)disabled @endif
            {{ $attributes }}
        />
        <span class="ui-checkbox-switch-track">
            <span class="ui-checkbox-switch-thumb"></span>
            <span class="ui-checkbox-switch-icons">🌙☀️</span>
        </span>
        @if($label)<span class="ui-checkbox-switch-label">{{ $label }}</span>@endif
    </label>
    @if($error)<p class="ui-checkbox-error-message">{{ $error }}</p>@endif
</div>