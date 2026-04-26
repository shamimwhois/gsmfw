@props(['value' => 0, 'max' => 100, 'size' => 'md']) @php $s = match($size) { 'sm' => '-sm', 'lg' => '-lg', default => '-md' }; @endphp
<div class="ui-slider-range{{ $s }}">{{ $slot }}</div>