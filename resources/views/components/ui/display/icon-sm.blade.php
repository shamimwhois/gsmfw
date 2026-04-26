@props(['size' => 'sm']) @php $s = match($size) { 'sm' => '-sm', 'lg' => '-lg', default => '-md' }; @endphp
<div class="ui-icon-sm{{ $s }}">{{ $slot }}</div>