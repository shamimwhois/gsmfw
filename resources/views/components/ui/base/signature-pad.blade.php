@props(['label' => null, 'error' => null, 'disabled' => false, 'required' => false, 'borderColor' => '#000000', 'bgColor' => '#ffffff', 'height' => 200])

@php
$classes = 'ui-signature-pad';
if ($disabled) $classes .= ' ui-signature-pad-disabled';
@endphp

<div class="ui-signature-pad-wrapper">
    @if($label)
    <label class="ui-signature-pad-label">{{ $label }}@if($required)<span class="ui-signature-pad-required">*</span>@endif</label>
    @endif
    <canvas 
        class="{{ $classes }}"
        style="--signature-border: {{ $borderColor }}; --signature-bg: {{ $bgColor }}; height: {{ $height }}px"
        {{ $disabled ? 'disabled' : '' }}
    ></canvas>
    <input type="hidden" name="{{ $name ?? '' }}">
    @if($error)<p class="ui-signature-pad-error-message">{{ $error }}</p>@endif
</div>