@props(['src' => null, 'controls' => true, 'autoplay' => false, 'loop' => false, 'muted' => false, 'size' => 'md'])

@php
$sizeClass = match($size) { 'sm' => 'ui-audio-player-sm', 'md' => 'ui-audio-player-md', 'lg' => 'ui-audio-player-lg', default => 'ui-audio-player-md' };
@endphp

<div class="ui-audio-player {{ $sizeClass }}">
    <audio class="ui-audio-player-audio" @if($controls)controls @endif @if($autoplay)autoplay @endif @if($loop)loop @endif @if($muted)muted @endif>
        <source src="{{ $src }}" type="audio/mpeg" />
    </audio>
    {{ $slot }}
</div>