@props(['label' => null, 'checked' => false, 'disabled' => false, 'error' => null, 'size' => 'md', 'value' => '1'])

@php
$classes = 'ui-radio';
$classes .= match($size) { 'sm' => ' ui-radio-sm', 'md' => ' ui-radio-md', 'lg' => ' ui-radio-lg', default => '' };
if ($checked) $classes .= ' ui-radio-checked';
if ($disabled) $classes .= ' ui-radio-disabled';
@endphp

<div class="ui-radio-wrapper">
    <label class="{{ $classes }}">
        <input 
            type="radio"
            name="{{ $name ?? '' }}"
            id="{{ $id ?? $name ?? '' }}"
            value="{{ $value }}"
            @if($checked)checked @endif
            @if($disabled)disabled @endif
            {{ $attributes }}
        />
        <span class="ui-radio-box"></span>
        @if($label)<span class="ui-radio-label">{{ $label }}</span>@endif
    </label>
    @if($error)<p class="ui-radio-error-message">{{ $error }}</p>@endif
</div>