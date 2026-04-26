@props([
    'glow' => false,
])

<div class="ui-hud-frame {{ $glow ? 'ui-hud-frame-glow' : '' }}">
    <span class="ui-hud-corner ui-hud-corner-tl"></span>
    <span class="ui-hud-corner ui-hud-corner-tr"></span>
    <span class="ui-hud-corner ui-hud-corner-bl"></span>
    <span class="ui-hud-corner ui-hud-corner-br"></span>
    <div class="ui-hud-content">
        {{ $slot }}
    </div>
</div>