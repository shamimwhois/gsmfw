@props(['title' => 'Placeholder', 'icon' => null])

<div class="ui-placeholder">
    @if($icon)
    <span class="ui-placeholder-icon">{!! $icon !!}</span>
    @endif
    <span class="ui-placeholder-title">{{ $title }}</span>
    {{ $slot }}
</div>