<!-- resources/views/partials/button.blade.php -->
@props(['type' => 'button', 'class' => '', 'text' => 'Button'])

<button type="{{ $type }}" class="btn {{ $class }}">
    {{ $text }}
</button>
