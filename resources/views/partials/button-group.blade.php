<!-- resources/views/partials/button-group.blade.php -->
@props(['buttons' => []])

<div class="btn-group" role="group">
    @foreach ($buttons as $button)
        <button type="{{ $button['type'] ?? 'button' }}" class="btn {{ $button['class'] ?? '' }}">
            {{ $button['text'] ?? 'Button' }}
        </button>
    @endforeach
</div>
