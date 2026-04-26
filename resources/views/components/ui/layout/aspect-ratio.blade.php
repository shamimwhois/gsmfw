@props(['ratio' => '16/9'])

<div class="ui-aspect-ratio" style="aspect-ratio: {{ $ratio }}">
    <div class="ui-aspect-ratio-content">
        {{ $slot }}
    </div>
</div>