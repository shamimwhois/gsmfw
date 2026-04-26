@props(['icon' => null, 'size' => 'md']) @php $s = match($size) { 'sm' => '-sm', 'lg' => '-lg', default => '-md' }; @endphp
<div class="ui-icon{{ $s }}">@if($icon){!! $icon !!}@endif{{ $slot }}</div>