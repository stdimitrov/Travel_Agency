<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column nav-legacy nav-compact nav-child-indent nav-collapse-hide-child nav-flat" data-widget="treeview" role="menu" data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
                                 with font-awesome or any other icon font library -->
                            <li class="nav-item">
                                <a href="{{ route('admin.dashboard')}}" class="nav-link {{ (request()->is('admin/dashboard*')) ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-home"></i>
                                    <p>
                                        Dashboard
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.profile')}}" class="nav-link {{ (request()->is('admin/profile*')) ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-user"></i>
                                    <p>
                                        Profile
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.usersProfile')}}" class="nav-link {{ (request()->is('admin/usersProfile*')) ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-cog"></i>
                                    <p>
                                        Users
                                    </p>
                                </a>
                            </li>
                        </ul>

                    </nav>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Logout Links -->
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </ul>
            </div>
        </div>
    </nav>
    <main class="py-4">
        @yield('content')
    </main>
</div>
</body>
</html>
