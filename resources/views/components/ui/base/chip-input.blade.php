@props(['placeholder' => 'Add chip...', 'disabled' => false, 'max' => null, 'size' => 'md'])

@php
$classes = 'ui-chip-input';
$classes .= match($size) { 'sm' => ' ui-chip-input-sm', 'md' => ' ui-chip-input-md', 'lg' => ' ui-chip-input-lg', default => '' };
if ($disabled) $classes .= ' ui-chip-input-disabled';
@endphp

<div class="{{ $classes }}">
    <div class="ui-chip-input-chips">
        {{ $slot }}
    </div>
    <input 
        type="text"
        placeholder="{{ $placeholder }}"
        class="ui-chip-input-field"
        @if($disabled)disabled @endif
        {{ $attributes }}
    />
</div>