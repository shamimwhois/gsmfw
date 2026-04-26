@props(['glow' => false, 'hover' => false, 'padding' => 'md', 'header' => null, 'footer' => null])

@php
$classes = 'ui-card';
if ($glow) $classes .= ' ui-card-glow';
if ($hover) $classes .= ' ui-card-hover';
$classes .= match($padding) {
    'none' => ' ui-card-padding-none',
    'sm' => ' ui-card-padding-sm',
    'md' => ' ui-card-padding-md', 
    'lg' => ' ui-card-padding-lg',
    default => ' ui-card-padding-md',
};
@endphp

<article class="{{ $classes }}">
    @if($header)
    <header class="ui-card-header">
        {{ $header }}
    </header>
    @endif
    <div class="ui-card-body">
        {{ $slot }}
    </div>
    @if($footer)
    <footer class="ui-card-footer">
        {{ $footer }}
    </footer>
    @endif
</article>