@props(['label' => null, 'placeholder' => '', 'disabled' => false, 'toolbar' => true, 'size' => 'md'])

@php
$classes = 'ui-rich-text-editor';
$classes .= match($size) { 'sm' => ' ui-rich-text-editor-sm', 'md' => ' ui-rich-text-editor-md', 'lg' => ' ui-rich-text-editor-lg', default => '' };
if ($disabled) $classes .= ' ui-rich-text-editor-disabled';
@endphp

<div class="ui-rich-text-editor-wrapper">
    @if($label)
    <label class="ui-rich-text-editor-label">{{ $label }}</label>
    @endif
    <div class="{{ $classes }}">
        @if($toolbar)
        <div class="ui-rich-text-editor-toolbar">
            <button type="button" data-command="bold"><b>B</b></button>
            <button type="button" data-command="italic"><i>I</i></button>
            <button type="button" data-command="underline"><u>U</u></button>
            <button type="button" data-command="insertOrderedList">1.</button>
            <button type="button" data-command="insertUnorderedList">•</button>
        </div>
        @endif
        <div class="ui-rich-text-editor-content" contenteditable="true">
            {{ $slot }}
        </div>
    </div>
</div>