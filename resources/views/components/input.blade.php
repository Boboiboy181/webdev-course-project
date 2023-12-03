@props(['label', 'name', 'type' , 'placeholder' => 'Enter your password ...' ])

<div class="input-container">
    <label for="{{ $name }}">{{ $label }}</label>
    <input name="{{ $name }}" type="{{ $type }} " placeholder="{{ $placeholder }}" />
</div>
