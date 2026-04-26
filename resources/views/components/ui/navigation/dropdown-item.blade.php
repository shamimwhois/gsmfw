@props(['active' => false, 'disabled' => false, 'divided' => false])

<a href="{{ $disabled ? '#' : ($href ?? '#') }}" class="ui-dropdown-item {{ $active ? 'ui-dropdown-item-active' : '' }} {{ $disabled ? 'ui-dropdown-item-disabled' : '' }}" {{ $disabled ? 'tabindex="-1"' : '' }}>
    {{ $slot }}
</a>