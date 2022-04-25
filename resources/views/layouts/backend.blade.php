<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('layouts.includes.css')
    <!-- Scrollbar -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <!-- Admin Style -->
    <link href="{{ asset('css/backend.css') }}" rel="stylesheet">
<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        @include('layouts.includes.backend.sidebar')

        <!-- Page Content  -->
        <div id="content">

            <!-- navbar -->
            @include('layouts.includes.backend.topnav')
            <!-- ./navbar -->

            <!-- content -->
            <div class="yield-content">
                <x-alert/>
                @yield('content')
            </div>
        </div>

    </div>

    <!-- Scripts -->
    @include('layouts.includes.js')
    <!-- Scrollbar -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="{{ asset('js/backend.js') }}" ></script>
    @stack('scripts')
    <!-- ./Scripts -->

</body>
</html>

