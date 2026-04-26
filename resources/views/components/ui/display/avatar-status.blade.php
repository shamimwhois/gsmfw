@props(['status' => null, 'size' => 'md'])

@php
$statusClass = match($status) { 'online' => 'ui-avatar-status-online', 'offline' => 'ui-avatar-status-offline', 'away' => 'ui-avatar-status-away', 'busy' => 'ui-avatar-status-busy', default => '' };
$sizeClass = match($size) { 'sm' => 'ui-avatar-status-sm', 'md' => 'ui-avatar-status-md', 'lg' => 'ui-avatar-status-lg', default => 'ui-avatar-status-md' };
@endphp

<div class="ui-avatar-status {{ $sizeClass }}">
    <div class="ui-avatar">{{ $slot }}</div>
    @if($status)
    <span class="ui-avatar-status-dot {{ $statusClass }}"></span>
    @endif
</div>