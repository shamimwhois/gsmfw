@props(['label' => null, 'checked' => false, 'disabled' => false, 'error' => null, 'size' => 'md', 'value' => '1'])

@php
$classes = 'ui-checkbox-toggle';
$classes .= match($size) { 'sm' => ' ui-checkbox-toggle-sm', 'md' => ' ui-checkbox-toggle-md', 'lg' => ' ui-checkbox-toggle-lg', default => '' };
if ($checked) $classes .= ' ui-checkbox-toggle-checked';
if ($disabled) $classes .= ' ui-checkbox-toggle-disabled';
@endphp

<div class="ui-checkbox-toggle-wrapper">
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
        <span class="ui-checkbox-toggle-track">
            <span class="ui-checkbox-toggle-thumb"></span>
        </span>
        @if($label)<span class="ui-checkbox-toggle-label">{{ $label }}</span>@endif
    </label>
    @if($error)<p class="ui-checkbox-error-message">{{ $error }}</p>@endif
</div>