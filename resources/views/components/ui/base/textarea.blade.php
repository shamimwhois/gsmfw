@props(['label' => null, 'placeholder' => '', 'error' => null, 'disabled' => false, 'required' => false, 'rows' => 3, 'size' => 'md'])

@php
$classes = 'ui-textarea';
$classes .= match($size) { 'sm' => ' ui-textarea-sm', 'md' => ' ui-textarea-md', 'lg' => ' ui-textarea-lg', default => '' };
if ($error) $classes .= ' ui-textarea-error';
if ($disabled) $classes .= ' ui-textarea-disabled';
@endphp

<div class="ui-textarea-wrapper">
    @if($label)
    <label class="ui-textarea-label">{{ $label }}@if($required)<span class="ui-textarea-required">*</span>@endif</label>
    @endif
    <textarea 
        name="{{ $name ?? '' }}"
        id="{{ $id ?? $name ?? '' }}"
        placeholder="{{ $placeholder }}"
        rows="{{ $rows }}"
        class="{{ $classes }}"
        @if($disabled)disabled @endif
        @if($required)required @endif
        {{ $attributes }}
    >{{ $slot }}</textarea>
    @if($error)<p class="ui-textarea-error-message">{{ $error }}</p>@endif
</div>