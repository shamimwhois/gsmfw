@props(['title' => 'No data', 'description' => 'There is nothing to display here yet.', 'icon' => null])

<div class="ui-empty-state">
    @if($icon)
    <span class="ui-empty-state-icon">{!! $icon !!}</span>
    @endif
    <h3 class="ui-empty-state-title">{{ $title }}</h3>
    <p class="ui-empty-state-description">{{ $description }}</p>
    <div class="ui-empty-state-actions">{{ $slot }}</div>
</div>