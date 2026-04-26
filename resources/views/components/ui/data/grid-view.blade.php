@props(['columns' => 2, 'gap' => 'md'])

@php
$gapClass = match($gap) { 'sm' => 'ui-grid-view-gap-sm', 'md' => 'ui-grid-view-gap-md', 'lg' => 'ui-grid-view-gap-lg', default => 'ui-grid-view-gap-md' };
@endphp

<div class="ui-grid-view" style="--columns: {{ $columns }}">
    <div class="ui-grid-view-items {{ $gapClass }}">
        {{ $slot }}
    </div>
</div>