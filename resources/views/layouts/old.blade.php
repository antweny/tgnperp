<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

@include('layouts.includes.css')
<!-- Public Styles -->
    <link href="{{ asset('css/public.css') }}" rel="stylesheet" />

</head>
<body class="body-container">
<div class="inner-body">


    {{--        <header class="fixed-top">--}}
    {{--            <div class="inner-header">--}}
    {{--                <div class="container">--}}
    {{--                    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">--}}
    {{--                        <div class="container-fluid">--}}
    {{--                            <div class="collapse navbar-collapse " id="navbarSupportedContent">--}}
    {{--                                <ul class="navbar-nav me-auto order-0 ">--}}
    {{--                                    <li class="nav-item">--}}
    {{--                                        <a class="nav-link active" aria-current="page" href="#">Home</a>--}}
    {{--                                    </li>--}}
    {{--                                    <li class="nav-item">--}}
    {{--                                        <a class="nav-link" href="#">Course</a>--}}
    {{--                                    </li>--}}
    {{--                                    <li class="nav-item">--}}
    {{--                                        <a class="nav-link" href="#">About us</a>--}}
    {{--                                    </li>--}}
    {{--                                    <li class="nav-item">--}}
    {{--                                        <a class="nav-link" href="#">Contacts</a>--}}
    {{--                                    </li>--}}
    {{--                                    <li class="nav-item">--}}
    {{--                                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>--}}
    {{--                                    </li>--}}
    {{--                                </ul>--}}
    {{--                                <div class="mx-auto">--}}
    {{--                                    <a class="navbar-brand " href="#">Navbar</a>--}}
    {{--                                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
    {{--                                        <span class="navbar-toggler-icon"></span>--}}
    {{--                                    </button>--}}
    {{--                                </div>--}}
    {{--                                <div class="d-flex ms-auto">--}}
    {{--                                    <ul class="navbar-nav me-auto order-0 ">--}}
    {{--                                        <li class="nav-item">--}}
    {{--                                            <a class="nav-link active" aria-current="page" href="#">Home</a>--}}
    {{--                                        </li>--}}
    {{--                                        <li class="nav-item">--}}
    {{--                                            <a class="nav-link" href="#">Course</a>--}}
    {{--                                        </li>--}}
    {{--                                        <li class="nav-item">--}}
    {{--                                            <a class="nav-link" href="#">About us</a>--}}
    {{--                                        </li>--}}
    {{--                                        <li class="nav-item">--}}
    {{--                                            <a class="nav-link" href="#">Contacts</a>--}}
    {{--                                        </li>--}}
    {{--                                        <li class="nav-item">--}}
    {{--                                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>--}}
    {{--                                        </li>--}}
    {{--                                    </ul>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </nav>--}}

    {{--                    <nav class="navbar navbar-expand-lg">--}}
    {{--                        <div class="container px-5">--}}
    {{--                            <a class="navbar-brand text-white" href="{{url('/')}}">Women Representation <br/> In Leadership (WRL)</a>--}}
    {{--                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>--}}
    {{--                            <div class="mx-auto order-0">--}}
    {{--                                <a class="navbar-brand mx-auto" href="#">Navbar 2</a>--}}
    {{--                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">--}}
    {{--                                    <span class="navbar-toggler-icon"></span>--}}
    {{--                                </button>--}}
    {{--                            </div>--}}
    {{--                            <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
    {{--                                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">--}}
    {{--                                    <li class="nav-item">--}}
    {{--                                        <a class="nav-link" href="{{route('default')}}">--}}
    {{--                                            Home--}}
    {{--                                        </a>--}}
    {{--                                    </li>--}}
    {{--                                    <li class="nav-item">--}}
    {{--                                        <a class="nav-link" href="#!">--}}
    {{--                                            About--}}
    {{--                                        </a>--}}
    {{--                                    </li>--}}
    {{--                                    <li class="nav-item">--}}
    {{--                                        <a class="nav-link" href="{{route('leadership.index')}}">--}}
    {{--                                            Leadership--}}
    {{--                                        </a>--}}
    {{--                                    </li>--}}
    {{--                                    <li class="nav-item">--}}
    {{--                                        @auth--}}
    {{--                                            <x-nav-link href="{{route('dashboard')}}" class="nav-link" label="Dashboard" />--}}
    {{--                                        @else--}}
    {{--                                            <x-nav-link href="{{route('login')}}" class="nav-link btn btn-outline-light btn-lg" label="Login" />--}}
    {{--                                        @endauth--}}
    {{--                                    </li>--}}
    {{--                                </ul>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </nav>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </header>--}}

    <main>
        @yield('content')
    </main>

    <footer class="bg-blue">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-start">
                    Copyright &copy; {{date('Y')}}
                </div>
                <div class="col-md-6 text-end">
                    Designed by <a class="text-orange" href="http://tgnp.or.tz" target="_blank">Tanzania Gender Networking Programme (TGNP)</a>
                </div>
            </div>
        </div>
    </footer>
</div>

<!-- Scripts -->
@include('layouts.includes.js')
<script src="{{ asset('js/public.js') }}" ></script>
@stack('scripts')

</body>
