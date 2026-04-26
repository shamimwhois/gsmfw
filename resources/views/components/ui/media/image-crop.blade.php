@props(['aspect' => '16/9'])

<div class="ui-image-crop" style="aspect-ratio: {{ $aspect }}">
    {{ $slot }}
</div>