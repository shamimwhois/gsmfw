@props(['open' => false, 'closable' => true, 'title' => null])

<div class="ui-modal-center" x-show="{{ $open }}">
    <div class="ui-modal-center-backdrop" @click="open = false"></div>
    <div class="ui-modal-center-container">
        <div class="ui-modal-center-content">
            @if($title || $closable)
            <div class="ui-modal-center-header">
                @if($title)<h3 class="ui-modal-center-title">{{ $title }}</h3>@endif
                @if($closable)<button type="button" class="ui-modal-center-close" @click="open = false">✕</button>@endif
            </div>
            @endif
            <div class="ui-modal-center-body">{{ $slot }}</div>
        </div>
    </div>
</div>