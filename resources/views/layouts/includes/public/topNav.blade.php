<nav class="navbar navbar-expand-lg topNav fixed-top bg-black">
    <div class="container">
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav me-auto order-0 ">
                <li class="nav-item">
                    <a class="nav-link active text-center" aria-current="page" href="{{url('/')}}">
                        Women Representation <br/> in Tanzania (WRL)
                    </a>
                </li>
            </ul>

            <div class="mx-auto">
                <ul class="navbar-nav me-auto order-0 ">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('default')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#!">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('leadership.index')}}">Leadership</a>
                    </li>
                </ul>
            </div>

            <div class="d-flex ms-auto">
                <ul class="navbar-nav me-auto order-0 ">
                    <li class="nav-item">
                        @auth
                            <x-nav-link href="{{route('dashboard')}}" class="nav-link" label="Dashboard" />
                        @else
                            <x-nav-link href="{{route('login')}}" class="nav-link btn btn-outline-light btn-lg" label="Login" />
                        @endauth
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
