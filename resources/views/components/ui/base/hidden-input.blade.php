@props(['value' => '', 'size' => 'md']) @php $s = match($size) { 'sm' => '-sm', 'lg' => '-lg', default => '-md' }; @endphp
<div class="ui-hidden-input{{ $s }}" value="{{ $value }}">{{ $slot }}</div>