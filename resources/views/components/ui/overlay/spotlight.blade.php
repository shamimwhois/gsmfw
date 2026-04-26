@props(['closable' => true])

<div class="ui-spotlight" x-data="{ open: false }">
    <div class="ui-spotlight-backdrop" @click="open = false"></div>
    <div class="ui-spotlight-content">
        {{ $slot }}
    </div>
</div>