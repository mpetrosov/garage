@include('/partials/_head')

    <body>
        <div class="container-fluid">
            @yield('head')
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
        <div class="container">
            @yield('car')
        </div>
        <div class="container-fluid">
            @yield('funny-logo')
        </div>
        @include('footer')
    </body>
</html>