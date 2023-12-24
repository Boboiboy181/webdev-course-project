const customerInfo = localStorage.getItem('address') ? JSON.parse(localStorage.getItem('address')) : null;
const cartItems = localStorage.getItem('cartItems') ? JSON.parse(localStorage.getItem('cartItems')) : [];
const note = document.querySelector('#note') || null;
const btnCreateOrder = document.querySelector('.btn-create-order') || null;

const totalPrice = () => {
    const deliveryChecked = document.querySelector('.delivery-check-input:checked') || null;
    let deliveryFee = 0;
    if (deliveryChecked.value === 'priority') {
        deliveryFee = 15000;
    } else {
        deliveryFee = 0;
    }

    return cartItems?.reduce(
        (total, item) => total + item.quantity * item.price,
        0
    ) + deliveryFee
}


btnCreateOrder?.addEventListener('click', function (e) {
    const order = {
        customer: {
            id: customerInfo?.id || '',
            name: customerInfo?.fullName,
            phone: customerInfo?.phone,
        },
        totalPrice: totalPrice(),
        items: cartItems,
        note: note.value,
        address: customerInfo?.address,
    }
    console.log(order)

});
