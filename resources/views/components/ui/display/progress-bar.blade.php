@props([
    'value' => 0,
    'max' => 100,
    'color' => 'cyan',
    'showValue' => false,
    'animated' => true,
])

<div class="ui-progress" role="progressbar" aria-valuenow="{{ $value }}" aria-valuemin="0" aria-valuemax="{{ $max }}">
    <div 
        class="ui-progress-bar ui-progress-bar-{{ $color }} {{ $animated ? 'ui-progress-bar-animated' : '' }}"
        style="width: {{ ($value / $max) * 100 }}%"
    >
        @if($showValue)
        <span class="ui-progress-value">{{ $value }}%</span>
        @endif
    </div>
</div>