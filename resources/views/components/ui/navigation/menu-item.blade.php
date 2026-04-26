@props(['active' => false, 'disabled' => false, 'icon' => null])

<li class="ui-menu-item {{ $active ? 'ui-menu-item-active' : '' }} {{ $disabled ? 'ui-menu-item-disabled' : '' }}">
    <a href="{{ $disabled ? '#' : ($href ?? '#') }}" {{ $disabled ? 'tabindex="-1"' : '' }}>
        @if($icon)<span class="ui-menu-item-icon">{!! $icon !!}</span>@endif
        {{ $slot }}
    </a>
</li>