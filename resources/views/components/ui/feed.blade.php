@props(['items' => [], 'type' => 'default'])

<div class="ui-feed ui-feed-{{ $type }}">
    @forelse($items as $item)
    <article class="feed-item">
        @if(isset($item['avatar']))
        <div class="feed-avatar">
            <img src="{{ $item['avatar'] }}" alt="{{ $item['author'] ?? 'User' }}" />
        </div>
        @elseif(isset($item['icon']))
        <div class="feed-icon">{!! $item['icon'] !!}</div>
        @else
        <div class="feed-avatar feed-avatar-default">
            <span>{{ strtoupper(substr($item['author'] ?? 'U', 0, 1)) }}</span>
        </div>
        @endif
        <div class="feed-content">
            <div class="feed-header">
                <span class="feed-author">{{ $item['author'] ?? 'User' }}</span>
                @if(isset($item['action']))
                <span class="feed-action">{{ $item['action'] }}</span>
                @endif
                <span class="feed-time">{{ $item['time'] ?? '' }}</span>
            </div>
            @if(isset($item['title']))
            <h4 class="feed-title">{{ $item['title'] }}</h4>
            @endif
            @if(isset($item['content']))
            <p class="feed-text">{{ $item['content'] }}</p>
            @endif
            @if(isset($item['media']))
            <div class="feed-media">
                <img src="{{ $item['media'] }}" alt="Feed media" />
            </div>
            @endif
            @if(isset($item['stats']))
            <div class="feed-stats">
                @foreach($item['stats'] as $label => $value)
                <span class="feed-stat">
                    <span class="stat-value">{{ $value }}</span>
                    <span class="stat-label">{{ $label }}</span>
                </span>
                @endforeach
            </div>
            @endif
        </div>
    </article>
    @empty
    <div class="feed-empty">
        <p>No activity yet</p>
    </div>
    @endforelse
</div>