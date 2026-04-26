@props(['label' => null, 'placeholder' => 'Search...', 'error' => null, 'disabled' => false, 'required' => false, 'value' => '', 'size' => 'md', 'clearable' => true])

@php
$classes = 'ui-input-search';
$classes .= match($size) { 'sm' => ' ui-input-search-sm', 'md' => ' ui-input-search-md', 'lg' => ' ui-input-search-lg', default => '' };
if ($error) $classes .= ' ui-input-error';
if ($disabled) $classes .= ' ui-input-disabled';
@endphp

<div class="ui-input-wrapper">
    @if($label)<label class="ui-input-label">{{ $label }}@if($required)<span class="ui-input-required">*</span>@endif</label>@endif
    <div class="ui-input-search-wrapper">
        <span class="ui-input-search-icon">🔍</span>
        <input 
            type="search"
            name="{{ $name ?? '' }}"
            id="{{ $id ?? $name ?? '' }}"
            value="{{ $value }}"
            placeholder="{{ $placeholder }}"
            class="{{ $classes }}"
            @if($disabled)disabled @endif
            @if($required)required @endif
            {{ $attributes }}
        />
        @if($clearable)<button type="button" class="ui-input-search-clear" style="display:none">✕</button>@endif
    </div>
    @if($error)<p class="ui-input-error-message">{{ $error }}</p>@endif
</div>