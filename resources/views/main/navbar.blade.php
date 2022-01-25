<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <!-- Navbar content -->

    <img src="{{asset('logo/CompanyLogo.png')}}" class="rounded mx-auto d-block" alt="Cinque Terre" width="360"
         height="200">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/about_us')}}">About us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/destinations')}}">Destinations</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/stories')}}">Stories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/join_us')}}">Join us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/services')}}">Services</a>
            </li>
        </ul>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
            @if (\Request::is('login') or Request::is('register'))
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            @endif
        </ul>
        <!-- --------------------------------------------------------------------
        -------------------------------------------------------------------- -->


        <!-- --------------------------------------------------------------------
        -------------------------------------------------------------------- -->
    </div>
</nav>
