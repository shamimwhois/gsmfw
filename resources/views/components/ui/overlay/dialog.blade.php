@props(['open' => false, 'title' => null, 'closable' => true, 'size' => 'md'])

<div class="ui-dialog" x-show="{{ $open }}">
    <div class="ui-dialog-backdrop" @click="open = false"></div>
    <div class="ui-dialog-container">
        <div class="ui-dialog-content">
            @if($title)
            <div class="ui-dialog-header">
                <h3 class="ui-dialog-title">{{ $title }}</h3>
                @if($closable)
                <button type="button" class="ui-dialog-close" @click="open = false">✕</button>
                @endif
            </div>
            @endif
            <div class="ui-dialog-body">{{ $slot }}</div>
        </div>
    </div>
</div>