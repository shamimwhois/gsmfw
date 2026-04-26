@props(['src' => null, 'alt' => 'Image', 'zoomable' => true])

<div class="ui-image-zoom {{ $zoomable ? 'ui-image-zoom-enabled' : '' }}">
    @if($src)
    <img src="{{ $src }}" alt="{{ $alt }}" class="ui-image-zoom-img" />
    @else
    {{ $slot }}
    @endif
</div>