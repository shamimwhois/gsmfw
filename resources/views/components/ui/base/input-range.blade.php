@props(['label' => null, 'error' => null, 'disabled' => false, 'required' => false, 'value' => 50, 'min' => 0, 'max' => 100, 'step' => 1, 'showValue' => true, 'size' => 'md'])

@php
$classes = 'ui-input-range';
$classes .= match($size) { 'sm' => ' ui-input-range-sm', 'md' => ' ui-input-range-md', 'lg' => ' ui-input-range-lg', default => '' };
if ($disabled) $classes .= ' ui-input-range-disabled';
@endphp

<div class="ui-input-wrapper">
    @if($label)<label class="ui-input-label">{{ $label }}@if($required)<span class="ui-input-required">*</span>@endif</label>@endif
    <div class="ui-input-range-wrapper">
        <input 
            type="range"
            name="{{ $name ?? '' }}"
            id="{{ $id ?? $name ?? '' }}"
            value="{{ $value }}"
            class="{{ $classes }}"
            min="{{ $min }}"
            max="{{ $max }}"
            step="{{ $step }}"
            @if($disabled)disabled @endif
            @if($required)required @endif
            {{ $attributes }}
        />
        @if($showValue)<span class="ui-input-range-value">{{ $value }}</span>@endif
    </div>
    @if($error)<p class="ui-input-error-message">{{ $error }}</p>@endif
</div>