@props([
    'value' => 0,
    'label' => '',
    'color' => 'cyan',
])

<div class="ui-beam-marker ui-beam-marker-{{ $color }}">
    <span class="ui-beam-value">{{ $value }}</span>
    @if($label)
    <span class="ui-beam-label">{{ $label }}</span>
    @endif
</div>