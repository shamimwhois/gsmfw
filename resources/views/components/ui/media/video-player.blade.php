@props(['src' => null, 'poster' => null, 'controls' => true, 'autoplay' => false, 'loop' => false, 'muted' => false, 'size' => 'md'])

@php
$sizeClass = match($size) { 'sm' => 'ui-video-player-sm', 'md' => 'ui-video-player-md', 'lg' => 'ui-video-player-lg', 'full' => 'ui-video-player-full', default => 'ui-video-player-md' };
@endphp

<div class="ui-video-player {{ $sizeClass }}">
    <video class="ui-video-player-video" @if($controls)controls @endif @if($autoplay)autoplay @endif @if($loop)loop @endif @if($muted)muted @endif @if($poster)poster="{{ $poster }}" @endif>
        <source src="{{ $src }}" type="video/mp4" />
    </video>
</div>