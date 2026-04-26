@props([
    'variant' => 'light',
    'loading' => false,
])

<div class="ui-skeleton {{ $variant === 'circle' ? 'ui-skeleton-circle' : 'ui-skeleton-text' }}"></div>