@props([
    'size' => 'md',
    'animated' => true,
])

<div class="ui-reticle ui-reticle-{{ $size }} {{ $animated ? 'ui-reticle-animated' : '' }}">
    <span class="ui-reticle-ring"></span>
    <span class="ui-reticle-dot"></span>
    <span class="ui-reticle-line ui-reticle-line-t"></span>
    <span class="ui-reticle-line ui-reticle-line-r"></span>
    <span class="ui-reticle-line ui-reticle-line-b"></span>
    <span class="ui-reticle-line ui-reticle-line-l"></span>
</div>