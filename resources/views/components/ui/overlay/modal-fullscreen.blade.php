@props(['open' => false, 'closable' => true, 'title' => null])

<div class="ui-modal-fullscreen" x-show="{{ $open }}">
    <div class="ui-modal-fullscreen-backdrop" @click="open = false"></div>
    <div class="ui-modal-fullscreen-container">
        <div class="ui-modal-fullscreen-content">
            @if($title || $closable)
            <div class="ui-modal-fullscreen-header">
                @if($title)<h3 class="ui-modal-fullscreen-title">{{ $title }}</h3>@endif
                @if($closable)<button type="button" class="ui-modal-fullscreen-close" @click="open = false">✕</button>@endif
            </div>
            @endif
            <div class="ui-modal-fullscreen-body">{{ $slot }}</div>
        </div>
    </div>
</div>