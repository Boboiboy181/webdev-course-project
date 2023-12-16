<div class="dropdown">
    <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
            aria-expanded="false">
        <svg width="42" height="42" viewBox="0 0 42 42" fill="none"
             xmlns="http://www.w3.org/2000/svg">
            <path
                d="M20.5227 21C24.3009 21 27.3636 17.866 27.3636 14C27.3636 10.134 24.3009 7 20.5227 7C16.7446 7 13.6818 10.134 13.6818 14C13.6818 17.866 16.7446 21 20.5227 21Z"
                fill="black"/>
            <path
                d="M20.5227 24.5C10.0903 24.5 6.84091 31.5 6.84091 31.5V35H34.2045V31.5C34.2045 31.5 30.9551 24.5 20.5227 24.5Z"
                fill="black"/>
        </svg>
    </button>
    <ul class="dropdown-menu">
        @auth
            <li class="dropdown-item">
                <p>Name: {{ auth()->user()->name }}</p>
            </li>
            <li class="dropdown-item">
                <a class="" href="#">Your profile</a>
            </li>

            @if(Auth::user()->role == 'admin')
                <li class="dropdown-item">
                    <a class="" href="{{route('admin.dashboard')}}">Dashboard</a>
                </li>
            @endif

            <hr>

            <li class="dropdown-item">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit"
                            class="btn btn-lg btn-danger btn-login fw-bold text-uppercase">Logout
                    </button>
                </form>
            </li>
        @else
            <li class="d-block w-100 text-center">
                <a role="button"
                   class="px-6 py-12 btn btn-primary btn-login fw-bold text-uppercase"
                   href="{{ route('login') }}">Login</a>
            </li>
        @endauth
    </ul>
</div>
