@props(['label' => null, 'error' => null, 'disabled' => false, 'required' => false, 'placeholder' => 'Select options', 'size' => 'md'])

@php
$classes = 'ui-select-multi';
$classes .= match($size) { 'sm' => ' ui-select-multi-sm', 'md' => ' ui-select-multi-md', 'lg' => ' ui-select-multi-lg', default => '' };
if ($disabled) $classes .= ' ui-select-multi-disabled';
@endphp

<div class="ui-select-multi-wrapper">
    @if($label)
    <label class="ui-select-label">{{ $label }}@if($required)<span class="ui-select-required">*</span>@endif</label>
    @endif
    <select 
        name="{{ $name ?? '' }}[]"
        id="{{ $id ?? $name ?? '' }}"
        class="{{ $classes }}"
        multiple
        @if($disabled)disabled @endif
        @if($required)required @endif
        {{ $attributes }}
    >
        {{ $slot }}
    </select>
    @if($error)<p class="ui-select-error-message">{{ $error }}</p>@endif
</div>