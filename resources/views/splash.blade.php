<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Pizza</title>
</head>
<body>
    <div class='box_pizza'>
        <img src="{{ asset('assets/1.png') }}" alt="pizza_slice" class='slice_pizza slice1' >
        <img src="{{ asset('assets/2.png') }}" alt="pizza_slice" class='slice_pizza slice2' >
        <img src="{{ asset('assets/5.png') }}" alt="pizza_slice" class='slice_pizza slice3' >
        <img src="{{ asset('assets/4.png') }}" alt="pizza_slice" class='slice_pizza slice4' >
        <img src="{{ asset('assets/3.png') }}" alt="pizza_slice" class='slice_pizza slice5' >
        <img src="{{ asset('assets/2.png') }}" alt="pizza_slice" class='slice_pizza slice6' >
        <p class='loading-text'>Loading</p>
        <p class='loading-text loading-dot1' >.</p>
        <p class='loading-text loading-dot2' >.</p>
        <p class='loading-text loading-dot3' >.</p>
        </div>
    </div>
</body>
</html>