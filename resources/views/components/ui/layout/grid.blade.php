@props(['cols' => 2, 'gap' => 'md', 'tag' => 'div'])

@php
$gapClass = match($gap) { 'sm' => 'ui-grid-gap-sm', 'md' => 'ui-grid-gap-md', 'lg' => 'ui-grid-gap-lg', 'xl' => 'ui-grid-gap-xl', default => 'ui-grid-gap-md' };
@endphp

<{{ $tag }} class="ui-grid" style="--cols: {{ $cols }}">
    <div class="ui-grid-items {{ $gapClass }}">
        {{ $slot }}
    </div>
</{{ $tag }}>