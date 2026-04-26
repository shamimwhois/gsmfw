@props(['active' => false, 'collapsed' => false, 'icon' => null])

<a href="{{ $href ?? '#' }}" class="ui-sidebar-item {{ $active ? 'ui-sidebar-item-active' : '' }} {{ $collapsed ? 'ui-sidebar-item-collapsed' : '' }}">
    @if($icon)
    <span class="ui-sidebar-item-icon">{!! $icon !!}</span>
    @endif
    @if(!$collapsed)
    <span class="ui-sidebar-item-label">{{ $slot }}</span>
    @endif
</a>