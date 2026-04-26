@props(['step' => 1, 'label' => 'Step', 'description' => null, 'status' => 'pending', 'icon' => null])

@php
$statusClass = match($status) { 'completed' => 'ui-step-completed', 'current' => 'ui-step-current', 'pending' => 'ui-step-pending', default => 'ui-step-pending' };
@endphp

<div class="ui-step {{ $statusClass }}" data-step="{{ $step }}">
    <div class="ui-step-indicator">
        @if($status === 'completed')
        <span class="ui-step-icon">✓</span>
        @elseif($icon)
        {!! $icon !!}
        @else
        <span class="ui-step-number">{{ $step }}</span>
        @endif
    </div>
    <div class="ui-step-content">
        <span class="ui-step-label">{{ $label }}</span>
        @if($description)
        <span class="ui-step-description">{{ $description }}</span>
        @endif
    </div>
</div>