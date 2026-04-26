@props(['active' => false, 'disabled' => false, 'icon' => null])

<a href="{{ $disabled ? '#' : ($href ?? '#') }}" class="ui-nav-link {{ $active ? 'ui-nav-link-active' : '' }} {{ $disabled ? 'ui-nav-link-disabled' : '' }}" {{ $disabled ? 'tabindex="-1" aria-disabled="true"' : '' }}>
    @if($icon)<span class="ui-nav-link-icon">{!! $icon !!}</span>@endif
    {{ $slot }}
</a>