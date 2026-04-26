<!-- Opacity component -->
@props(['opacity' => 50])

@php
$opacityPercent = is_numeric($opacity) ? $opacity . '%' : $opacity;
@endphp

<div class="opacity-{{ $opacity }}" style="--opacity: {{ $opacityPercent }}" {{ $attributes }}>
    {{ $slot }}
</div>