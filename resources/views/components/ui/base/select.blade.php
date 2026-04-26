@props(['label' => null, 'error' => null, 'disabled' => false, 'required' => false, 'placeholder' => 'Select option', 'size' => 'md'])

@php
$classes = 'ui-select';
$classes .= match($size) { 'sm' => ' ui-select-sm', 'md' => ' ui-select-md', 'lg' => ' ui-select-lg', default => '' };
if ($error) $classes .= ' ui-select-error';
if ($disabled) $classes .= ' ui-select-disabled';
@endphp

<div class="ui-select-wrapper">
    @if($label)
    <label class="ui-select-label">{{ $label }}@if($required)<span class="ui-select-required">*</span>@endif</label>
    @endif
    <div class="ui-select-container">
        <select 
            name="{{ $name ?? '' }}"
            id="{{ $id ?? $name ?? '' }}"
            class="{{ $classes }}"
            @if($disabled)disabled @endif
            @if($required)required @endif
            {{ $attributes }}
        >
            <option value="" disabled selected>{{ $placeholder }}</option>
            {{ $slot }}
        </select>
        <span class="ui-select-arrow">▼</span>
    </div>
    @if($error)<p class="ui-select-error-message">{{ $error }}</p>@endif
</div>