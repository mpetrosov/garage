{{-- <nav class="navbar navbar-expand-sm navbar-light bg-light sticky-top" id="navscroll">
    <a class="navbar-brand" href="/"><img class="img-fluid imgheader" src="\img\lobstr_logo_square.png" alt="lobster"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="mainMenu">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            @if (!Auth::check())
                <li class="nav-item">
                    <a class="nav-link deepPink font-weight-bold" href="#" data-toggle="modal" data-target="#login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link deepPink font-weight-bold" href="#" data-toggle="modal" data-target="#register">Sign-up</a>
                </li>
            @else
                <li class="nav-item"><a class="nav-link deepPink font-weight-bold"
                    href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('logout') }}
                    </a>
                </li>
            @endif
            <li class="nav-item"><a class="nav-link text-dark" href="/faq">FAQ</a> </li>
            <li class="nav-item"><a class="nav-link text-dark" href="/privacy-policy">Privacy policy</a></li>
            <li class="nav-item"><a class="nav-link text-dark" href="/contact">Contact</a></li>
        </ul>
    </div>
</nav>

@if(!Request::is('/'))
    @include('/partials/menu/_filter_bar')
@endif

@include('/partials/menu/_form_login')
@include('/partials/menu/_form_logout')
@include('/partials/menu/_form_register') --}}
