@props(['variant' => 'default']) @php $v = match($variant) { 'dark' => '-dark', 'light' => '-light', default => '' }; @endphp
<div class="ui-accordion-legacy{{ $v }}">{{ $slot }}</div>