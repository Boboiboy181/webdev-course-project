@props(['imgURL', 'methodName', 'value'])

<div class="payment-option-item">
    <div class="form-check form-check-custom">
        <label for="{{$value}}"></label>
        <input class="form-check-input" type="radio" name="payment-option" id="{{$value}}" checked
               value="{{ $value }}">
    </div>
    <img src="{{ $imgURL }}" alt="{{$methodName}}">
    <p>{{ $methodName }}</p>
</div>
