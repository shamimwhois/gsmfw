@props(['value' => 0, 'max' => 100, 'showLabel' => false, 'animated' => true, 'striped' => false])

@php
$percent = min(100, max(0, ($value / $max) * 100));
@endphp

<div class="ui-bar" role="progressbar" aria-valuenow="{{ $value }}" aria-valuemin="0" aria-valuemax="{{ $max }}">
    <div class="bar-track">
        <div 
            class="bar-fill {{ $animated ? 'bar-animated' : '' }} {{ $striped ? 'bar-striped' : '' }}" 
            style="width: {{ $percent }}%"
        >
            @if($showLabel)
            <span class="bar-label">{{ round($percent) }}%</span>
            @endif
        </div>
    </div>
</div>