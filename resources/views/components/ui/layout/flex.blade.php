@props(['gap' => 'md', 'tag' => 'div'])

@php
$gapClass = match($gap) { 'none' => 'ui-flex-gap-none', 'xs' => 'ui-flex-gap-xs', 'sm' => 'ui-flex-gap-sm', 'md' => 'ui-flex-gap-md', 'lg' => 'ui-flex-gap-lg', 'xl' => 'ui-flex-gap-xl', default => 'ui-flex-gap-md' };
@endphp

<{{ $tag }} class="ui-flex {{ $gapClass }}" {{ $attributes }}>
    {{ $slot }}
</{{ $tag }}>