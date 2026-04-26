@props(['columns' => 2, 'gap' => 'md'])

@php
$gapClass = match($gap) { 'sm' => 'ui-masonry-view-gap-sm', 'md' => 'ui-masonry-view-gap-md', 'lg' => 'ui-masonry-view-gap-lg', default => 'ui-masonry-view-gap-md' };
@endphp

<div class="ui-masonry-view" style="--columns: {{ $columns }}">
    <div class="ui-masonry-view-items {{ $gapClass }}">
        {{ $slot }}
    </div>
</div>