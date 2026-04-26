@props(['size' => 'md', 'class' => ''])

<svg xmlns="http://www.w3.org/2000/svg" width="{{ $size }}" height="{{ $size }}" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon-bug {{ $class }}">
    <rect x="8" y="6" width="8" height="14" rx="4"></rect>
    <path d="M8 6V4"></path>
    <path d="M16 6V4"></path>
    <path d="M8 20v2"></path>
    <path d="M16 20v2"></path>
    <path d="M9 10h.01"></path>
    <path d="M15 10h.01"></path>
    <line x1="5" y1="10" x2="5" y2="10.01"></line>
    <line x1="19" y1="10" x2="19" y2="10.01"></line>
    <line x1="5" y1="14" x2="5" y2="14.01"></line>
    <line x1="19" y1="14" x2="19" y2="14.01"></line>
</svg>