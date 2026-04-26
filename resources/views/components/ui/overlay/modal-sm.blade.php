@props(['size' => 'md']) @php $s = match($size) { 'sm' => '-sm', 'lg' => '-lg', default => '-md' }; @endphp
<div class="ui-modal-sm{{ $s }}">{{ $slot }}</div>