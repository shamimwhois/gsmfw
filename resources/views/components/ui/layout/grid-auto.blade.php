@props(['min' => '250px', 'gap' => 'md'])

@php
$gapClass = match($gap) { 'none' => 'ui-grid-auto-gap-none', 'sm' => 'ui-grid-auto-gap-sm', 'md' => 'ui-grid-auto-gap-md', 'lg' => 'ui-grid-auto-gap-lg', default => 'ui-grid-auto-gap-md' };
@endphp

<div class="ui-grid-auto" style="--min: {{ $min }}">
    <div class="ui-grid-auto-items {{ $gapClass }}">
        {{ $slot }}
    </div>
</div>