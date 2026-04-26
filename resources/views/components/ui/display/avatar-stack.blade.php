@props(['stacked' => true, 'size' => 'md'])

@php
$sizeClass = match($size) { 'sm' => 'ui-avatar-stack-sm', 'md' => 'ui-avatar-stack-md', 'lg' => 'ui-avatar-stack-lg', default => 'ui-avatar-stack-md' };
@endphp

<div class="ui-avatar-stack {{ $sizeClass }} {{ $stacked ? 'ui-avatar-stack-stacked' : '' }}">
    {{ $slot }}
</div>