@props(['variant' => 'default', 'size' => 'md', 'position' => 'top'])

<div class="ui-banner ui-banner-{{ $variant }} ui-banner-{{ $position }}">
    @if($title ?? false)
    <div class="banner-title">{{ $title }}</div>
    @endif
    <div class="banner-content">
        {{ $slot }}
    </div>
    @if($closable ?? false)
    <button class="banner-close" type="button" aria-label="Close">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <line x1="18" y1="6" x2="6" y2="18"></line>
            <line x1="6" y1="6" x2="18" y2="18"></line>
        </svg>
    </button>
    @endif
</div>