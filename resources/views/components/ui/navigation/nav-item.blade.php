@props(['active' => false, 'disabled' => false])

<li class="ui-nav-item {{ $active ? 'ui-nav-item-active' : '' }} {{ $disabled ? 'ui-nav-item-disabled' : '' }}">
    <a href="{{ $disabled ? '#' : ($href ?? '#') }}" {{ $disabled ? 'tabindex="-1"' : '' }}>{{ $slot }}</a>
</li>