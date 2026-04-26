@props(['size' => 'md', 'label' => 'Loading'])

@php
$sizeClass = match($size) { 'sm' => 'ui-spinner-dots-sm', 'md' => 'ui-spinner-dots-md', 'lg' => 'ui-spinner-dots-lg', default => 'ui-spinner-dots-md' };
@endphp

<div class="ui-spinner-dots {{ $sizeClass }}" role="status">
    <span class="ui-spinner-dots-item"></span>
    <span class="ui-spinner-dots-item"></span>
    <span class="ui-spinner-dots-item"></span>
    @if($label)
    <span class="ui-spinner-dots-label">{{ $label }}</span>
    @endif
</div>