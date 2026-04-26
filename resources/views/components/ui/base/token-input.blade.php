@props(['placeholder' => 'Add token...', 'disabled' => false, 'size' => 'md'])

@php
$classes = 'ui-token-input';
$classes .= match($size) { 'sm' => ' ui-token-input-sm', 'md' => ' ui-token-input-md', 'lg' => ' ui-token-input-lg', default => '' };
if ($disabled) $classes .= ' ui-token-input-disabled';
@endphp

<div class="{{ $classes }}">
    <div class="ui-token-input-tokens">
        {{ $slot }}
    </div>
    <input 
        type="text"
        placeholder="{{ $placeholder }}"
        class="ui-token-input-field"
        @if($disabled)disabled @endif
        {{ $attributes }}
    />
</div>