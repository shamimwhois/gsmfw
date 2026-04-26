@props(['siteKey' => '', 'theme' => 'light', 'size' => 'normal'])

@php
$classes = 'ui-captcha-input';
$classes .= match($size) { 'compact' => ' ui-captcha-input-compact', 'normal' => ' ui-captcha-input-normal', default => '' };
@endphp

<div class="ui-captcha-input-container" data-sitekey="{{ $siteKey }}" data-theme="{{ $theme }}">
    <div class="{{ $classes }}">
        <span class="ui-captcha-input-placeholder">[Captcha Widget]</span>
    </div>
</div>