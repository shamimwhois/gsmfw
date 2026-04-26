@props(['open' => false, 'size' => 'md', 'closable' => true, 'title' => null])

<div class="ui-modal {{ $closable ? 'ui-modal-closable' : '' }}" x-show="{{ $open }}" x-transition>
    <div class="ui-modal-backdrop" @click="open = false"></div>
    <div class="ui-modal-container ui-modal-{{ $size }}">
        <div class="ui-modal-content">
            @if($title || $closable)
            <div class="ui-modal-header">
                @if($title)<h3 class="ui-modal-title">{{ $title }}</h3>@endif
                @if($closable)<button type="button" class="ui-modal-close" @click="open = false">✕</button>@endif
            </div>
            @endif
            <div class="ui-modal-body">{{ $slot }}</div>
            @hasSection('footer')
            <div class="ui-modal-footer">
                @yield('footer')
            </div>
            @endif
        </div>
    </div>
</div>