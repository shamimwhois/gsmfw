@props(['size' => 'md']) @php $s = match($size) { 'xs' => '-xs', 'sm' => '-sm', default => '-md' }; @endphp
<div class="ui-btn-icon-only-xs{{ $s }}">{{ $slot }}</div>