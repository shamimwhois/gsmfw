@props(['provider' => null, 'size' => 'md', 'disabled' => false])

@php
$providerClass = match($provider) {
    'google' => 'ui-btn-social-google',
    'facebook' => 'ui-btn-social-facebook',
    'twitter' => 'ui-btn-social-twitter',
    'github' => 'ui-btn-social-github',
    'apple' => 'ui-btn-social-apple',
    'microsoft' => 'ui-btn-social-microsoft',
    default => 'ui-btn-social',
};
$sizeClass = match($size) {
    'sm' => 'ui-btn-sm', 'md' => 'ui-btn-md', 'lg' => 'ui-btn-lg', default => 'ui-btn-md',
};
@endphp

<button type="button" class="ui-button-social {{ $providerClass }} {{ $sizeClass }} {{ $disabled ? 'ui-btn-disabled' : '' }}" {{ $disabled ? 'disabled' : '' }} {{ $attributes }}>
    {{ $slot }}
</button>