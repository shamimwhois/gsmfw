@props(['label' => null, 'checked' => false, 'disabled' => false, 'error' => null, 'size' => 'md', 'value' => '1'])

@php
$classes = 'ui-radio-group';
$classes .= match($size) { 'sm' => ' ui-radio-group-sm', 'md' => ' ui-radio-group-md', 'lg' => ' ui-radio-group-lg', default => '' };
@endphp

<div class="ui-radio-group-wrapper">
    @if($label)<label class="ui-radio-group-label">{{ $label }}</label>@endif
    <div class="{{ $classes }}">
        {{ $slot }}
    </div>
    @if($error)<p class="ui-radio-error-message">{{ $error }}</p>@endif
</div>