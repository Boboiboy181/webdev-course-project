@props(['label', 'name', 'type'])

<div class="input-container">
    <label for="{{ $name }}">{{ $label }}</label>
    <input name="{{ $name }}" type="{{ $type }}">
</div>
