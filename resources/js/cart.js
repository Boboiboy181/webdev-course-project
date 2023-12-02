import * as bootstrap from "bootstrap";

const myModal = document.getElementById("staticBackdrop");
const totalCart = document.querySelector('.total-cart');

const getCartItems = () => {
    return JSON.parse(localStorage.getItem("cartItems")) || [];
}

const render = () => {
    totalCart.innerHTML = getCartItems().reduce((acc, curr) => acc + curr.quantity, 0)
}

myModal.addEventListener("shown.bs.modal", async function () {
    const increaseBtn = document.querySelector('.modal-btn_increase');
    const decreaseBtn = document.querySelector('.modal-btn_decrease');
    const quantity = document.querySelector('.modal-quantity');
    const addToCartBtn = document.querySelector('.modal-btn-add')
    const options = document.querySelectorAll('.form-check-input');
    const sizeCheckBox = document.querySelectorAll('input[name="size"]');
    const crustCheckBox = document.querySelectorAll('input[name="crust"]')
    const cheeseCheckbox = document.querySelectorAll('input[name="extras"]')
    const previewPrice = document.querySelector('.modal-btn-add span')
    const toast = document.getElementById('toastNotify')
    const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toast)
    const item = JSON.parse(sessionStorage.getItem("item")).item;

    let sizeValue, cheeseValue, crust, price;

    const getSelectedValue = (options) => {
        let value;
        options.forEach(option => {
            if (option.checked) {
                value = option.value;
            }
        })
        return value;
    }

    options.forEach((option) => {
        option.addEventListener('click', () => {
            sizeValue = getSelectedValue(sizeCheckBox);
            cheeseValue = getSelectedValue(cheeseCheckbox);
            crust = getSelectedValue(crustCheckBox);

            let sizePrice, cheesePrice

            if (sizeValue === '7 inches') sizePrice = item.info.price * 0.8
            else if (sizeValue === '9 inches') sizePrice = item.info.price;
            else sizePrice = item.info.price * 1.2;

            if (cheeseValue === '9” cheese') cheesePrice = 24500;
            else if (cheeseValue === 'Double 9” cheese') cheesePrice = 44500;
            else cheesePrice = 64000

            price = sizePrice + cheesePrice;

            previewPrice.innerHTML = price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        })
    })


    let totalCartValue = 1;
    const cartItems = getCartItems();

    const increaseQuantity = () => {
        increaseBtn.onclick = () => {
            totalCartValue = quantity.value++;
        }
    };

    const decreaseQuantity = () => {
        decreaseBtn.onclick = () => {
            if (quantity.value <= 1) {
                renderTotalCart(1);
                return;
            }
            quantity.value--;
            totalCartValue = quantity.value;
        }
    };

    const addToCart = () => {
        const existingCartItem = cartItems.find(cartItem => cartItem._id === item.info._id);

        const newItem = {
            ...item.info,
            quantity: Number(quantity.value)
        };

        if (item.category === 'pizza') {
            newItem.price = price;
            newItem.crust = crust;
            newItem.size = sizeValue;
            newItem.cheese = cheeseValue;
        }

        if (!existingCartItem) {
            return [...cartItems, newItem];
        } else {
            return cartItems.map(cartItem => {
                return cartItem._id === item.info._id ? newItem : cartItem;
            });
        }
    };


    addToCartBtn.addEventListener('click', () => {
        localStorage.setItem('cartItems', JSON.stringify(addToCart()))
        render();
        toastBootstrap.show();
    })

    increaseQuantity();
    decreaseQuantity();
});

render();

const cartIcon = document.querySelector('.cart-icon')

