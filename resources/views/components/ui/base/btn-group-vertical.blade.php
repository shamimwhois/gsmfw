@props(['size' => 'md']) @php $s = match($size) { 'xs' => '-xs', 'sm' => '-sm', 'lg' => '-lg', default => '-md' }; @endphp
<div class="ui-btn-group-vertical{{ $s }}">{{ $slot }}</div>