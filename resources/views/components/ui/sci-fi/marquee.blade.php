@props([
    'text' => '',
    'speed' => 'normal',
    'direction' => 'left',
])

<div class="ui-marquee-container">
    <div class="ui-marquee-content ui-marquee-{{ $direction }} ui-marquee-{{ $speed }}">
        <span>{{ $text }}</span>
        <span>{{ $text }}</span>
    </div>
</div>