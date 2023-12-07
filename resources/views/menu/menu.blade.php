@extends('layouts.app')

@section('content')
    @include('menu.sub-nav')
    <div class="container">
        @yield('menu-content')
    </div>
    <x-toast :message="'Add product succesfully 🤩'"/>
@endsection
