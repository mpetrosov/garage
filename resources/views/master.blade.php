@include('/partials/_head')

    <body>
        <div class="container">
            @yield('head')
        </div>
        <div class="container">
            @yield('header')
        </div>
        <div class="container p -0">
            <div class="container mx-15">
                @yield('gridboven')
            </div>
            <div class="container mx-15">
                @yield('content')
            </div>
            <div class="container mx-15">
                @yield('gridonder')
            </div>
        </div>
        <div class="container">
            @yield('car')
        </div>
        <div class="container">
            @yield('funny-logo')
        </div>
        @include('footer')
    </body>
</html>