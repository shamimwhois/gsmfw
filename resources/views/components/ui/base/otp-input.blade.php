@props(['length' => 6, 'disabled' => false, 'type' => 'numeric', 'value' => ''])

@php
$classes = 'ui-otp-input';
if ($disabled) $classes .= ' ui-otp-input-disabled';
@endphp

<div class="ui-otp-input-container" data-length="{{ $length }}">
    @for($i = 0; $i < $length; $i++)
    <input 
        type="text"
        maxlength="1"
        class="{{ $classes }}"
        inputmode="{{ $type }}"
        {{ $disabled ? 'disabled' : '' }}
    />
    @endfor
</div>