@props(['size' => 'lg']) @php $s = match($size) { 'sm' => '-sm', 'lg' => '-lg', default => '-lg' }; @endphp
<div class="ui-modal-lg{{ $s }}">{{ $slot }}</div>