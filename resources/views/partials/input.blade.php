<!-- resources/views/partials/input.blade.php -->
@props(['type' => 'text', 'name', 'placeholder' => '', 'value' => '', 'class' => ''])

<input
    type="{{ $type }}"
    name="{{ $name }}"
    placeholder="{{ $placeholder }}"
    value="{{ $value }}"
    class="form-control {{ $class }}"
>
