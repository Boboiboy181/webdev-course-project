<div>
    <div class="product-detail-container">
        <div class="product-detail-header">
            <img src="{{ $item->imgURL }}" alt="{{ $item->name }}">
            <p>{{ $item->name }}</p>
        </div>
        <p class="product-detail-desc">{{ $item->desc }}</p>
        <div class="{{  request()->is('menu/pizzas*') ? '' : 'none' }}">
            <div class="product-detail-body">
                <div class="base">
                    <p>Base</p>
                    <div class="form-check form-check-custom">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"
                               checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                            Thin and Crispy
                        </label>
                    </div>
                    <div class="form-check form-check-custom">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Thick and Spongy
                        </label>
                    </div>
                    <div class="form-check form-check-custom">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Medium
                        </label>
                    </div>
                </div>
                <div class="size">
                    <p>Size</p>
                    <div class="form-check form-check-custom">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            9 inches = 195.500đ
                        </label>
                    </div>
                    <div class="form-check form-check-custom">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                               checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            12 inches = 294.000đ
                        </label>
                    </div>
                </div>
            </div>
            <div class="product-detail-footer">
                <p>More options:</p>
                <div class="form-check form-check-custom">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                    <label class="form-check-label" for="flexRadioDefault1">
                        9” cheese = 24,500đ
                    </label>
                </div>
                <div class="form-check form-check-custom">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Double 9” cheese = 44,500đ
                    </label>
                </div>
                <div class="form-check form-check-custom">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Triple 9” cheese = 64,000đ
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer modal-footer-custom">
        <div class="modal-btn">
            <button type="button" class="btn btn-secondary btn-secondary-custom modal-btn_decrease">
                -
            </button>
            <label>
                <input type="text" class="modal-quantity" value="1">
            </label>
            <button type="button" class="btn btn-secondary btn-secondary-custom modal-btn_increase">
                +
            </button>
        </div>
        <button type="button" class="btn btn-primary btn-primary-custom modal-btn-add">ADD TO CART</button>
    </div>
</div>
