@props(['title' => null, 'icon' => null]) 
<div class="ui-toast-container">@if($title)<span class="ui-toast-container-title">{{ $title }}</span>@endif{{ $slot }}</div>