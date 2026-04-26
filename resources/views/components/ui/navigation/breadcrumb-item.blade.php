@props(['active' => false, 'disabled' => false])

<li class="ui-breadcrumb-item {{ $active ? 'ui-breadcrumb-item-active' : '' }} {{ $disabled ? 'ui-breadcrumb-item-disabled' : '' }}">
    @if($active || $disabled)
    <span>{{ $slot }}</span>
    @else
    <a href="{{ $href ?? '#' }}">{{ $slot }}</a>
    @endif
</li>