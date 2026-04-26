@props(['columns' => 2, 'gap' => 'md'])

@php
$gapClass = match($gap) { 'sm' => 'ui-stat-grid-gap-sm', 'md' => 'ui-stat-grid-gap-md', 'lg' => 'ui-stat-grid-gap-lg', default => 'ui-stat-grid-gap-md' };
@endphp

<div class="ui-stat-grid" style="--columns: {{ $columns }};">
    <div class="ui-stat-grid-items {{ $gapClass }}">
        {{ $slot }}
    </div>
</div>