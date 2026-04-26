<!-- Visible component -->
@props(['breakpoint' => 'base'])

<div class="visible visible-{{ $breakpoint }}" {{ $attributes }}>
    {{ $slot }}
</div>