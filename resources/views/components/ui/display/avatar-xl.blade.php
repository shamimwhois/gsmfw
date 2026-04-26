@props(['size' => 'xl']) @php $s = match($size) { 'sm' => '-sm', 'xl' => '-xl', '2xl' => '-2xl', default => '-xl' }; @endphp
<div class="ui-avatar-xl{{ $s }}">{{ $slot }}</div>