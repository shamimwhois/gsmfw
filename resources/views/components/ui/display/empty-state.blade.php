@props([
    'title' => null,
    'icon' => null,
])

<div class="ui-empty">
    @if($icon)
    <div class="ui-empty-icon">{!! $icon !!}</div>
    @endif
    @if($title)
    <p class="ui-empty-title">{{ $title }}</p>
    @endif
    <div class="ui-empty-content">{{ $slot }}</div>
</div>