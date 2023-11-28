@extends('layouts.app')

@section('content')
    @include('menu.sub-nav')
    <div class="container">
        @yield('menu-content')
        <x-modal/>
    </div>
@endsection
