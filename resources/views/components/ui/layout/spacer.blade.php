@props(['size' => 'md'])

@php
$sizeClass = match($size) { 'sm' => 'ui-spacer-sm', 'md' => 'ui-spacer-md', 'lg' => 'ui-spacer-lg', 'xl' => 'ui-spacer-xl', default => 'ui-spacer-md' };
@endphp

<div class="ui-spacer {{ $sizeClass }}"></div>