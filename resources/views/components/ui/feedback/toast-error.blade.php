@props(['title' => 'Error', 'duration' => 5000])

<div class="ui-toast-error" role="alert" data-duration="{{ $duration }}">
    <span class="ui-toast-error-icon">✕</span>
    <div class="ui-toast-error-content">
        <p class="ui-toast-error-title">{{ $title }}</p>
        <p class="ui-toast-error-message">{{ $slot }}</p>
    </div>
</div>