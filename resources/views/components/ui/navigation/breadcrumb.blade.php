@props(['size' => 'md'])

@php
$sizeClass = match($size) { 'sm' => 'ui-breadcrumb-sm', 'md' => 'ui-breadcrumb-md', 'lg' => 'ui-breadcrumb-lg', default => 'ui-breadcrumb-md' };
@endphp

<nav class="ui-breadcrumb {{ $sizeClass }}">
    <ol class="ui-breadcrumb-list">
        {{ $slot }}
    </ol>
</nav>