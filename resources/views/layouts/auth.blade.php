<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!-- styles -->
    @include('layouts.includes.css')

    <!-- auth style -->
    <link href="{{ asset('css/auth.css') }}" rel="stylesheet">

</head>
<body>

    <div class="">
        @yield('content')
    </div>

<!-- scripts -->
@include('layouts.includes.js')
<script src="{{ asset('js/auth.js') }}" ></script>
<!-- ./scripts -->
</body>
</html>
