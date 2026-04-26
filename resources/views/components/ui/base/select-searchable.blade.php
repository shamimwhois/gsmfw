@props(['label' => null, 'error' => null, 'disabled' => false, 'required' => false, 'placeholder' => 'Search...', 'size' => 'md'])

@php
$classes = 'ui-select-searchable';
$classes .= match($size) { 'sm' => ' ui-select-searchable-sm', 'md' => ' ui-select-searchable-md', 'lg' => ' ui-select-searchable-lg', default => '' };
if ($disabled) $classes .= ' ui-select-searchable-disabled';
@endphp

<div class="ui-select-searchable-wrapper">
    @if($label)
    <label class="ui-select-label">{{ $label }}@if($required)<span class="ui-select-required">*</span>@endif</label>
    @endif
    <div class="ui-select-searchable-container">
        <input 
            type="text"
            name="{{ $name ?? '' }}_search"
            class="{{ $classes }}"
            placeholder="{{ $placeholder }}"
            @if($disabled)disabled @endif
            {{ $attributes }}
        />
        <span class="ui-select-searchable-icon">🔍</span>
    </div>
    <div class="ui-select-searchable-dropdown">
        {{ $slot }}
    </div>
    @if($error)<p class="ui-select-error-message">{{ $error }}</p>@endif
</div>