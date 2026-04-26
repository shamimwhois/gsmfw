@props(['variant' => 'default', 'size' => 'md'])
@php $v = match($variant) { 'success' => '-success', 'error' => '-error', 'warning' => '-warning', default => '' }; $s = match($size) { 'sm' => '-sm', 'lg' => '-lg', default => '-md' }; @endphp
<div class="ui-progress-striped{{ $v }}{{ $s }}">{{ $slot }}</div>