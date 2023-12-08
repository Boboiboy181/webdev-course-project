const location = window.location.href;
const points = document.querySelectorAll(".progress-point") || null;
const totalCart = document.querySelector(".total-cart");
const cartQuantity = document.querySelectorAll(".cart-quantity") || null;
const incrementBtns = document.querySelectorAll(".increment-btn") || null;
const decrementBtns = document.querySelectorAll(".decrement-btn") || null;
const deleteBtns = document.querySelectorAll(".btn-delete") || null;
const cartList = document.querySelector(".cart-left > div") || null;

if (points) {
    switch (location) {
        case "http://127.0.0.1:8000/cart/payment":
            points.forEach((item) => item.classList.remove("progress-active"));
            points[1]?.classList.add("progress-active");
            break;
        case "http://127.0.0.1:8000/cart/thank-you":
            points.forEach((item) => item.classList.remove("progress-active"));
            points[2]?.classList.add("progress-active");
            break;
        default:
            points.forEach((item) => item.classList.remove("progress-active"));
            points[0]?.classList.add("progress-active");
    }
}

const getCartItems = () => {
    return JSON.parse(localStorage.getItem("cartItems")) || [];
};

const setCookie = () => {
    document.cookie = `cartItems=${localStorage.getItem(
        "cartItems"
    )}; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/;SameSite=None;Secure`;
};

const render = (quantity, index) => {
    const cartItems = getCartItems();
    totalCart.innerHTML = cartItems.reduce(
        (total, item) => total + item.quantity,
        0
    );

    if (quantity > 0) {
        if (quantity === 1) {
            cartQuantity[index].value = 1;
        }
        cartQuantity[index].value = quantity;
    }
};

incrementBtns?.forEach((incrementBtn, index) => {
    incrementBtn.addEventListener("click", () => {
        const temId = incrementBtn.getAttribute("data-id");
        const cartItems = getCartItems();
        const item = cartItems.find((item) => item._id === temId);
        item.quantity++;
        localStorage.setItem("cartItems", JSON.stringify(cartItems));
        render(item.quantity, index);
        setCookie();
    });
});

decrementBtns?.forEach((decrementBtn, index) => {
    decrementBtn.addEventListener("click", () => {
        const itemId = decrementBtn.getAttribute("data-id");
        const cartItems = getCartItems();
        const item = cartItems.find((item) => item._id === itemId);

        if (item.quantity > 1) {
            item.quantity--;
            localStorage.setItem("cartItems", JSON.stringify(cartItems));
            render(item.quantity, index);
            setCookie();
        }
    });
});

deleteBtns?.forEach((deleteBtn) => {
    deleteBtn.addEventListener("click", async () => {
        const id = deleteBtn.getAttribute("data-id");
        const url = deleteBtn.getAttribute("data-url");

        const cartItems = getCartItems();
        const newCartItems = cartItems.filter((item) => item._id !== id);

        localStorage.setItem("cartItems", JSON.stringify(newCartItems));
        setCookie();
        render();

        window.location.href = url;
    });
});
