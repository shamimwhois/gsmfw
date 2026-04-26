@props(['length' => 4, 'disabled' => false, 'value' => ''])

@php
$classes = 'ui-pin-input';
if ($disabled) $classes .= ' ui-pin-input-disabled';
@endphp

<div class="ui-pin-input-container" data-length="{{ $length }}">
    @for($i = 0; $i < $length; $i++)
    <input 
        type="password"
        maxlength="1"
        class="{{ $classes }}"
        {{ $disabled ? 'disabled' : '' }}
    />
    @endfor
</div>