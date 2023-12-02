@props(['label', 'name', 'type'])

<div class="input-container">
    <label for="{{ $name }}">{{ $label }}</label>
    <input id="{{ $name }}" name="{{ $name }}" type="{{ $type }}">
</div>
