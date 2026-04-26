@props(['title' => 'No data', 'description' => 'There is nothing to display here yet.', 'icon' => null])

<div class="ui-empty">
    @if($icon)
    <span class="ui-empty-icon">{!! $icon !!}</span>
    @endif
    <h3 class="ui-empty-title">{{ $title }}</h3>
    <p class="ui-empty-description">{{ $description }}</p>
    <div class="ui-empty-actions">{{ $slot }}</div>
</div>