@props(['size' => 'lg']) @php $s = match($size) { 'sm' => '-sm', 'lg' => '-lg', default => '-lg' }; @endphp
<div class="ui-drawer-lg{{ $s }}">{{ $slot }}</div>