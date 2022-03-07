<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Administration area - @yield('pageTitle')</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <!-- Styles -->
    <!--   -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
    <link href="{{ asset('css/adminsPages.css') }}" rel="stylesheet">
</head>

<body>
<div id="app">
    <nav class="navbar">
        <!-- Navbar content -->
        <img src="{{asset('logo/CompanyLogo.png')}}" class="rounded" alt="Cinque Terre">
        <ul class="nav">
            <li class="nav-item">
                <img class="avatar" src="{{asset(Auth::user()->avatar)}}" alt="image" >
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.profile')}}" class="link">
                    <p>Helloy {{ Auth::user()->name }}</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="link" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <p>{{ __('Logout') }}</p>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </nav>
    <div id="row">
            <!-- Sidebar -->
            <div id="col">
                <ul class="sidebar-nav" id="sidebar-ul">
                    <li>
                        <a href="{{ route('admin.dashboard')}}"
                           class="nav-link {{ (request()->is('admin/dashboard*')) ? 'active' : '' }}">
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.profile')}}"
                           class="nav-link {{ (request()->is('admin/profile*')) ? 'active' : '' }}">
                            profile
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.usersProfile')}}"
                           class="nav-link {{ (request()->is('admin/usersProfile*')) ? 'active' : '' }}">
                            users
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.tripsProfile')}}"
                           class="nav-link {{ (request()->is('admin/usersProfile*')) ? 'active' : '' }}">
                            Trips
                        </a>
                    </li>
                    <li>
                        <a href="#"
                           class="nav-link {{ (request()->is('admin/usersProfile*')) ? 'active' : '' }}">
                            Empty
                        </a>
                    </li>
                    <li>
                        <a href="#"
                           class="nav-link {{ (request()->is('admin/usersProfile*')) ? 'active' : '' }}">
                            Empty
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Page content -->
            <div id="col-md">
                <!-- Keep all page content within the page-content inset div! -->
                <div class="page-yield">
                    <div class="row-yield">
                            @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!--            ------------                          -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
</body>
</html>
