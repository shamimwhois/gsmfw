@props(['checked' => false, 'disabled' => false, 'size' => 'md', 'value' => '1'])

@php
$classes = 'ui-toggle-switch';
$classes .= match($size) { 'sm' => ' ui-toggle-switch-sm', 'md' => ' ui-toggle-switch-md', 'lg' => ' ui-toggle-switch-lg', default => '' };
if ($checked) $classes .= ' ui-toggle-switch-on';
if ($disabled) $classes .= ' ui-toggle-switch-disabled';
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
    <span class="ui-toggle-switch-track">
        <span class="ui-toggle-switch-thumb"></span>
    </span>
    <span class="ui-toggle-switch-status">{{ $checked ? 'ON' : 'OFF' }}</span>
</label>