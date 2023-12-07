<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">
    <link
        href="https://site-assets.fontawesome.com/releases/v6.1.2/css/all.css?fbclid=IwAR2Leèv1ZTLJsKEsnl4HGMf5XRZuPqx5yOFnFaOFbVgCiCeU87S0up6ptKU"
        rel="stylesheet">
    @vite('resources/js/app.js')
</head>
<body class="{{!request()->is('/')? 'background-linear': ''}}">
<main class="app-container">
    @include('partials.back-to-top')
    @include('header')
    @yield('content')
    @if (!request()->is('menu*'))
        @include('footer')
    @endif
    <x-modal/>
</main>
</body>
</html>
