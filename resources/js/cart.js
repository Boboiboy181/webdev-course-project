const myModal = document.getElementById("staticBackdrop");

myModal.addEventListener("shown.bs.modal", async function () {
    const totalCart = document.querySelector('.total-cart');
    const increaseBtn = document.querySelector('.modal-btn_increase');
    const decreaseBtn = document.querySelector('.modal-btn_decrease');
    const quantity = document.querySelector('.modal-quantity');
    const addToCartBtn = document.querySelector('.modal-btn-add')
    const item = JSON.parse(sessionStorage.getItem("item"));

    let totalCartValue = 1;

    const renderTotalCart = (quantity) => {
        totalCart.innerHTML = quantity;
    };

    const getCartItems = () => {
        return JSON.parse(localStorage.getItem("cartItems")) || [];
    }

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
        console.log('hello')
        const newCartItems = cartItems.map((cartItem) => {
            return cartItems.find((cartItem) => cartItem._id === item._id) ? {
                ...cartItem,
                quantity: quantity.value
            } : cartItem;
        })
        localStorage.setItem("cartItems", JSON.stringify(newCartItems))
        console.log(getCartItems())
    }

    addToCartBtn.addEventListener('click', () => {
        addToCart();
    })

    const totalQuantity = cartItems.reduce((acc, currentValue) => acc + currentValue, 0)

    increaseQuantity();
    decreaseQuantity();
});

