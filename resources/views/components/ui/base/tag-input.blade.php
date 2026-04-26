@props(['placeholder' => 'Add tag...', 'disabled' => false, 'max' => null, 'size' => 'md'])

@php
$classes = 'ui-tag-input';
$classes .= match($size) { 'sm' => ' ui-tag-input-sm', 'md' => ' ui-tag-input-md', 'lg' => ' ui-tag-input-lg', default => '' };
if ($disabled) $classes .= ' ui-tag-input-disabled';
@endphp

<div class="{{ $classes }}">
    <div class="ui-tag-input-tags">
        {{ $slot }}
    </div>
    <input 
        type="text"
        placeholder="{{ $placeholder }}"
        class="ui-tag-input-field"
        @if($disabled)disabled @endif
        {{ $attributes }}
    />
</div>