@include('/partials/_head')

    <body>
        <div class="container-fluid">
            @yield('gridboven')
        </div>
         <div class="container-fluid">
            @yield('content')
        </div>
        <div class="container-fluid">
            @yield('gridonder')
        </div>
    </body>
</html>