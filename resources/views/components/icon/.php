<?php

use function Laravel\Folio\icon;

component('icon', function ($props) {
    $name = $props['name'] ?? 'circle';
    $size = match ($props['size'] ?? 'md') {
        'xs' => '12',
        'sm' => '16',
        'md' => '20',
        'lg' => '24',
        'xl' => '32',
        default => '20',
    };
    $variant = $props['variant'] ?? 'outline';
    $glow = $props['glow'] ?? 'none';
    $strokeWidth = $variant === 'outline' ? '1.5' : '2';
    $class = $props['class'] ?? '';

    $catalog = include __DIR__ . '/_catalog.php';

    $path = '';
    $filled = false;

    foreach ($catalog as $category => $icons) {
        if (isset($icons[$name])) {
            $iconData = $icons[$name];
            if (is_array($iconData)) {
                $path = $iconData['d'] ?? '';
                $filled = $iconData['filled'] ?? $variant === 'filled';
            } else {
                $path = $iconData;
                $filled = $variant === 'filled';
            }
            break;
        }
    }

    if (!$path) {
        $path = 'M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z';
    }

    $glowClass = match ($glow) {
        'soft' => 'icon-glow-soft',
        'medium' => 'icon-glow-medium',
        'hard' => 'icon-glow-hard',
        default => '',
    };

    $fill = $filled ? 'currentColor' : 'none';

    return <<<HTML
<svg 
    xmlns="http://www.w3.org/2000/svg" 
    width="{$size}" 
    height="{$size}" 
    viewBox="0 0 24 24" 
    fill="{$fill}" 
    stroke="currentColor" 
    stroke-width="{$strokeWidth}" 
    stroke-linecap="round" 
    stroke-linejoin="round"
    class="icon {$glowClass} {$class}"
>
    <path d="{$path}" />
</svg>
HTML;
});