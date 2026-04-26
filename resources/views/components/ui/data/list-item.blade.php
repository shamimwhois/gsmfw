@props(['active' => false, 'disabled' => false, 'icon' => null])

<li class="ui-list-item {{ $active ? 'ui-list-item-active' : '' }} {{ $disabled ? 'ui-list-item-disabled' : '' }}">
    @if($icon)<span class="ui-list-item-icon">{!! $icon !!}</span>@endif
    <span class="ui-list-item-content">{{ $slot }}</span>
</li>