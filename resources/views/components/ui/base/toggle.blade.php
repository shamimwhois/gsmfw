@props(['checked' => false, 'disabled' => false, 'size' => 'md', 'value' => '1'])

@php
$classes = 'ui-toggle';
$classes .= match($size) { 'sm' => ' ui-toggle-sm', 'md' => ' ui-toggle-md', 'lg' => ' ui-toggle-lg', default => '' };
if ($checked) $classes .= ' ui-toggle-checked';
if ($disabled) $classes .= ' ui-toggle-disabled';
@endphp

<label class="{{ $classes }}">
    <input 
        type="checkbox"
        name="{{ $name ?? '' }}"
        id="{{ $id ?? $name ?? '' }}"
        value="{{ $value }}"
        @if($checked)checked @endif
        @if($disabled)disabled @endif
        {{ $attributes }}
    />
    <span class="ui-toggle-track">
        <span class="ui-toggle-thumb"></span>
    </span>
</label>