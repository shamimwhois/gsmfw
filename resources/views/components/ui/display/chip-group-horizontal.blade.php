@props(['variant' => 'default', 'size' => 'md'])
<div class="ui-chip-group-horizontal {{ match($size) { 'sm' => '-sm', 'lg' => '-lg', default => '-md' } }}">
{{ $slot }}
</div>