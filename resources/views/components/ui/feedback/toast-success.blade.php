@props(['title' => 'Success', 'duration' => 3000])

<div class="ui-toast-success" role="alert" data-duration="{{ $duration }}">
    <span class="ui-toast-success-icon">✓</span>
    <div class="ui-toast-success-content">
        <p class="ui-toast-success-title">{{ $title }}</p>
        <p class="ui-toast-success-message">{{ $slot }}</p>
    </div>
</div>