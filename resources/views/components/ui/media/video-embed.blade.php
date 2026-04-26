@props(['src' => null, 'width' => 560, 'height' => 315, 'lite' => false])

<div class="ui-video-embed {{ $lite ? 'ui-video-embed-lite' : '' }}">
    <iframe src="{{ $src }}" width="{{ $width }}" height="{{ $height }}" frameborder="0" allowfullscreen></iframe>
</div>