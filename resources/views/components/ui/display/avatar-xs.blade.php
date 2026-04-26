@props(['size' => 'xs']) @php $s = match($size) { 'xs' => '-xs', 'sm' => '-sm', 'lg' => '-lg', default => '-xs' }; @endphp
<div class="ui-avatar-xs{{ $s }}">{{ $slot }}</div>