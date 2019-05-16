@include('/partials/_head')

    <body>
        <div class="container-fluid">
            @yield('navbar')
        </div>
        <div class="container-fluid">
            @yield('header')
        </div>
        <div class="container-fluid jmain">
            <div class="row">
                <div class="container-fluid  mx-5">
                    @yield('gridboven')
                </div>
                <div class="container-fluid mx-5">
                    @yield('content')
                </div>
                <div class="container-fluid mx-5">
                    @yield('gridonder')
                </div>
            </div>
        </div>
        @include('footer')
    </body>
</html>