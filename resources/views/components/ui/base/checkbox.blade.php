@props(['label' => null, 'checked' => false, 'disabled' => false, 'error' => null, 'size' => 'md', 'value' => '1'])

@php
$classes = 'ui-checkbox';
$classes .= match($size) { 'sm' => ' ui-checkbox-sm', 'md' => ' ui-checkbox-md', 'lg' => ' ui-checkbox-lg', default => '' };
if ($checked) $classes .= ' ui-checkbox-checked';
if ($disabled) $classes .= ' ui-checkbox-disabled';
@endphp

<div class="ui-checkbox-wrapper">
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
        <span class="ui-checkbox-box">✓</span>
        @if($label)<span class="ui-checkbox-label">{{ $label }}</span>@endif
    </label>
    @if($error)<p class="ui-checkbox-error-message">{{ $error }}</p>@endif
</div>