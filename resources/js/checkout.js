const location = window.location.href;
const points = document.querySelectorAll('.progress-point') || null;

if (points) {
    switch (location) {
        case 'http://127.0.0.1:8000/cart/payment':
            points.forEach((item) => item.classList.remove('progress-active'));
            points[1].classList.add('progress-active');
            break;
        case 'http://127.0.0.1:8000/cart/thank-you':
            points.forEach((item) => item.classList.remove('progress-active'));
            points[2].classList.add('progress-active');
            break;
        default:
            points.forEach((item) => item.classList.remove('progress-active'));
            points[0].classList.add('progress-active');
    }
}

