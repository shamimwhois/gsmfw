@props(['size' => 'md']) @php $s = match($size) { 'sm' => '-sm', 'lg' => '-lg', default => '-md' }; @endphp
<div class="ui-icon-md{{ $s }}">{{ $slot }}</div>