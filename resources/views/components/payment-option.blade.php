@props(['imgURL', 'methodName', 'value'])

<div class="payment-option-item">
    <div class="form-check form-check-custom">
        <input class="form-check-input" type="radio" name="crust" id="payment-option" checked
            value="{{ $value }}">
    </div>
    <img src="{{ $imgURL }}">
    <p>{{ $methodName }}</p>
</div>
