@props(['currentStep' => 1, 'totalSteps' => 3, 'size' => 'md', 'variant' => 'default'])

@php
$sizeClass = match($size) { 'sm' => 'ui-stepper-sm', 'md' => 'ui-stepper-md', 'lg' => 'ui-stepper-lg', default => 'ui-stepper-md' };
$variantClass = match($variant) { 'vertical' => 'ui-stepper-vertical', 'horizontal' => 'ui-stepper-horizontal', default => 'ui-stepper-horizontal' };
@endphp

<div class="ui-stepper {{ $sizeClass }} {{ $variantClass }}">
    {{ $slot }}
</div>