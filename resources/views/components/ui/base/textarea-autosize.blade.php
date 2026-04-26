@props(['label' => null, 'placeholder' => '', 'error' => null, 'disabled' => false, 'required' => false, 'minHeight' => 80, 'size' => 'md'])

@php
$classes = 'ui-textarea-autosize';
$classes .= match($size) { 'sm' => ' ui-textarea-autosize-sm', 'md' => ' ui-textarea-autosize-md', 'lg' => ' ui-textarea-autosize-lg', default => '' };
if ($disabled) $classes .= ' ui-textarea-autosize-disabled';
@endphp

<div class="ui-textarea-autosize-wrapper">
    @if($label)
    <label class="ui-textarea-label">{{ $label }}@if($required)<span class="ui-textarea-required">*</span>@endif</label>
    @endif
    <textarea 
        name="{{ $name ?? '' }}"
        id="{{ $id ?? $name ?? '' }}"
        placeholder="{{ $placeholder }}"
        class="{{ $classes }}"
        style="min-height: {{ $minHeight }}px"
        @if($disabled)disabled @endif
        @if($required)required @endif
        {{ $attributes }}
    >{{ $slot }}</textarea>
    @if($error)<p class="ui-textarea-error-message">{{ $error }}</p>@endif
</div>