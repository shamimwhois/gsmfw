@props(['size' => 'lg']) @php $s = match($size) { 'sm' => '-sm', 'lg' => '-lg', default => '-md' }; @endphp
<div class="ui-icon-lg{{ $s }}">{{ $slot }}</div>