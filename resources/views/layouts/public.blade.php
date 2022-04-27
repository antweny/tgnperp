<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.includes.css')
    <!-- Public Styles -->
    <link href="{{ asset('css/public.css') }}" rel="stylesheet" />
</head>

<body>

    @include('layouts.includes.public.topNav')

    <div class="mainContainer">
        @yield('content')
    </div>

    <footer class="bg-black">
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

    <!-- Scripts -->
    @include('layouts.includes.js')
    <script src="{{ asset('js/public.js') }}" ></script>
    @stack('scripts')

</body>

</html>
