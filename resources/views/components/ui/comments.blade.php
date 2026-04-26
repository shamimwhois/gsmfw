@props(['comments' => [], 'avatar' => null, 'maxDisplay' => 5])

<div class="ui-comments">
    @forelse($comments as $comment)
    <article class="comment-item">
        @if(isset($comment['avatar']))
        <x-icon.avatar :src="$comment['avatar']" size="sm" />
        @elseif($avatar)
        <x-icon.avatar :src="$avatar" size="sm" />
        @else
        <div class="comment-avatar">
            <span class="avatar-initials">{{ strtoupper(substr($comment['author'] ?? 'U', 0, 1)) }}</span>
        </div>
        @endif
        <div class="comment-body">
            <div class="comment-header">
                <span class="comment-author">{{ $comment['author'] ?? 'User' }}</span>
                <span class="comment-time">{{ $comment['time'] ?? '' }}</span>
            </div>
            <p class="comment-content">{{ $comment['content'] }}</p>
            @if(isset($comment['replies']))
            <div class="comment-replies">
                @foreach($comment['replies'] as $reply)
                <article class="comment-reply">
                    <span class="reply-author">{{ $reply['author'] }}</span>
                    <p class="reply-content">{{ $reply['content'] }}</p>
                </article>
                @endforeach
            </div>
            @endif
        </div>
    </article>
    @empty
    <div class="comments-empty">
        <p>No comments yet. Be the first to comment!</p>
    </div>
    @endforelse
</div>