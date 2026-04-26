@props(['size' => 'md', 'stroke' => 4, 'label' => 'Loading'])

@php
$sizeClass = match($size) { 'sm' => 'ui-spinner-ring-sm', 'md' => 'ui-spinner-ring-md', 'lg' => 'ui-spinner-ring-lg', default => 'ui-spinner-ring-md' };
@endphp

<div class="ui-spinner-ring {{ $sizeClass }}" role="status">
    <svg viewBox="0 0 50 50">
        <circle class="ui-spinner-ring-path" cx="25" cy="25" r="20" fill="none" stroke-width="{{ $stroke }}"></circle>
    </svg>
    @if($label)
    <span class="ui-spinner-ring-label">{{ $label }}</span>
    @endif
</div>