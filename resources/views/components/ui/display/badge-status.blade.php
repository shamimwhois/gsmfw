@props(['status' => 'online', 'size' => 'md'])

@php
$statusClass = match($status) { 'online' => 'ui-badge-status-online', 'offline' => 'ui-badge-status-offline', 'away' => 'ui-badge-status-away', 'busy' => 'ui-badge-status-busy', default => 'ui-badge-status-online' };
$sizeClass = match($size) { 'sm' => 'ui-badge-status-sm', 'md' => 'ui-badge-status-md', 'lg' => 'ui-badge-status-lg', default => 'ui-badge-status-md' };
@endphp

<span class="ui-badge-status {{ $statusClass }} {{ $sizeClass }}">
    <span class="ui-badge-status-indicator"></span>
    {{ $slot }}
</span>