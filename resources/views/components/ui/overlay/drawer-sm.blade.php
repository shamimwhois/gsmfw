@props(['size' => 'md']) @php $s = match($size) { 'sm' => '-sm', 'lg' => '-lg', default => '-md' }; @endphp
<div class="ui-drawer-sm{{ $s }}">{{ $slot }}</div>