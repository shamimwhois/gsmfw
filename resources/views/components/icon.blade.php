@props([
    'name' => 'circle',
    'size' => 'md',
    'variant' => 'outline',
    'glow' => 'none',
    'class' => '',
])

<?php
$sizeMap = [
    'xs' => '12',
    'sm' => '16', 
    'md' => '20',
    'lg' => '24',
    'xl' => '32',
];
$sizeValue = $sizeMap[$size] ?? '20';
$strokeWidth = $variant === 'outline' ? '1.5' : '2';
$glowClass = match ($glow) {
    'soft' => 'icon-glow-soft',
    'medium' => 'icon-glow-medium', 
    'hard' => 'icon-glow-hard',
    default => '',
};

$fill = in_array($variant, ['filled', 'solid']) ? 'currentColor' : 'none';

$catalog = include resource_path('views/components/icon/_catalog.php');
$path = '';
$filled = false;

foreach ($catalog as $category => $icons) {
    if (isset($icons[$name])) {
        $iconData = $icons[$name];
        if (is_array($iconData)) {
            $path = $iconData['d'] ?? '';
            $filled = $iconData['filled'] ?? false;
        } else {
            $path = $iconData;
            $filled = in_array($variant, ['filled', 'solid']);
        }
        break;
    }
}

if (!$path) {
    $path = 'M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z';
}

if ($filled && $variant === 'outline') {
    $fill = 'none';
}
?>

<svg 
    xmlns="http://www.w3.org/2000/svg" 
    width="{{ $sizeValue }}" 
    height="{{ $sizeValue }}" 
    viewBox="0 0 24 24" 
    fill="{{ $fill }}" 
    stroke="currentColor" 
    stroke-width="{{ $strokeWidth }}" 
    stroke-linecap="round" 
    stroke-linejoin="round"
    {{ $attributes->class(['icon', $glowClass, $class]) }}
>
    {!! $path !!}
</svg>