@props([
    'size' => 'md',
    'glow' => 'none',
    'corners' => false,
])

<div 
    class="ui-glow-container" 
    style="--glow-size: var(--ui-glow-{{ $size }});"
>
    @if($corners)
    <span class="ui-corner ui-corner-tl"></span>
    <span class="ui-corner ui-corner-tr"></span>
    <span class="ui-corner ui-corner-bl"></span>
    <span class="ui-corner ui-corner-br"></span>
    @endif
    {{ $slot }}
</div>