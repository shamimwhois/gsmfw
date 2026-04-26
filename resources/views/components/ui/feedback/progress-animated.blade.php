@props(['variant' => 'default', 'size' => 'md'])
@php $v = match($variant) { 'success' => '-success', 'error' => '-error', default => '' }; $s = match($size) { 'sm' => '-sm', 'lg' => '-lg', default => '-md' }; @endphp
<div class="ui-progress-animated{{ $v }}{{ $s }}">{{ $slot }}</div>