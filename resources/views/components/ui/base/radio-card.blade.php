@props(['label' => null, 'checked' => false, 'disabled' => false, 'error' => null, 'size' => 'md', 'value' => '1'])

@php
$classes = 'ui-radio-card';
$classes .= match($size) { 'sm' => ' ui-radio-card-sm', 'md' => ' ui-radio-card-md', 'lg' => ' ui-radio-card-lg', default => '' };
if ($checked) $classes .= ' ui-radio-card-checked';
if ($disabled) $classes .= ' ui-radio-card-disabled';
@endphp

<div class="ui-radio-card-wrapper">
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
        <span class="ui-radio-card-box">
            <span class="ui-radio-card-indicator"></span>
        </span>
        <span class="ui-radio-card-content">{{ $slot }}</span>
    </label>
    @if($error)<p class="ui-radio-error-message">{{ $error }}</p>@endif
</div>