<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!--
    <meta name="viewport" content="width=device-width, initial-scale=1">
    -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Administration area - @yield('pageTitle')</title>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ asset('css/adminsPages.css') }}" rel="stylesheet">

    <!--   -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <style>
        .register-form h1 {
            font-size: 42px;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin: 150px 0px;
            line-height: 60px;
        }
        .register-form .form-control {
            border: none;
            background: none;
            border-bottom: 1px solid #82cbe8;
            border-radius: 0px !important;
            color: #25cff2;
        }
        .register-form .form-control:focus,
        .register-form .form-control:hover{
            border:none;
            margin: 0 auto;
            background: none;
            box-shadow: none;
            border-bottom: 1px solid #fff;
            color: #8fddec;
        }


        /* ******************* */
        /* for all admin pages */
        /* ******************* */


        *{
            box-sizing: border-box;
        }

        form{
            max-width: 450px;
            margin: 0 auto;
        }

        form > div{
            margin-top: 5px;
            position: relative;
            background: white;
            border-bottom: 1px solid #ccc;
        }

        form > div > label{
            opacity: 0.3;
            font-weight: bold;
            position: absolute;
            top: 20px;
            left: 60px;
        }

        form > div > input[type="text"],
        form > div > input[type="text"],
        form > div > input[type="text"],
        form > div > input[type="text"],
        form > div > input[type="text"],
        form > div > input[type="text"],
        form > div > input[type="text"],
        form > div > input[type="text"],
        form > div > input[type="text"],
        form > div > input[type="text"],
        form > div > input[type="email"],
        form > div > input[type="password"],
        form > div > input[type="tel"]{
            width: 100%;
            border: 0;
            padding: 20px 20px 20px 60px;
            background: #F0ECEC;
        }

        form > div > input[type="text"]:focus,
        form > div > input[type="text"]:focus,
        form > div > input[type="text"]:focus,
        form > div > input[type="text"]:focus,
        form > div > input[type="text"]:focus,
        form > div > input[type="text"]:focus,
        form > div > input[type="text"]:focus,
        form > div > input[type="text"]:focus,
        form > div > input[type="text"]:focus,
        form > div > input[type="email"]:focus,
        form > div > input[type="password"]:focus,
        form > div > input[type="tel"]:focus{
            outline: 0;
            background: white;
        }

        form > div > input[type="text"]:focus + label,
        form > div > input[type="text"]:focus + label,
        form > div > input[type="text"]:focus + label,
        form > div > input[type="text"]:focus + label,
        form > div > input[type="text"]:focus + label,
        form > div > input[type="text"]:focus + label,
        form > div > input[type="text"]:focus + label,
        form > div > input[type="text"]:focus + label,
        form > div > input[type="text"]:focus + label,
        form > div > input[type="text"]:focus + label,
        form > div > input[type="text"]:focus + label,
        form > div > input[type="text"]:focus + label,
        form > div > input[type="text"]:focus + label,
        form > div > input[type="email"]:focus + label,
        form > div > input[type="password"]:focus + label,
        form > div > input[type="tel"]:focus + label{
            opacity: 0;
        }

        form > div > input[type="text"]:valid,
        form > div > input[type="text"]:valid,
        form > div > input[type="text"]:valid,
        form > div > input[type="text"]:valid,
        form > div > input[type="text"]:valid,
        form > div > input[type="text"]:valid,
        form > div > input[type="text"]:valid,
        form > div > input[type="text"]:valid,
        form > div > input[type="text"]:valid,
        form > div > input[type="text"]:valid,
        form > div > input[type="text"]:valid,
        form > div > input[type="text"]:valid,
        form > div > input[type="email"]:valid,
        form > div > input[type="password"]:valid,
        form > div > input[type="tel"]:valid{
            background: url('https://webdevtrick.com/wp-content/uploads/check-icon.svg');
            background-size: 20px;
            background-repeat: no-repeat;
            background-position: 415px 18px;
        }

        form > div > input[type="text"]:valid + label,
        form > div > input[type="text"]:valid + label,
        form > div > input[type="text"]:valid + label,
        form > div > input[type="text"]:valid + label,
        form > div > input[type="text"]:valid + label,
        form > div > input[type="text"]:valid + label,
        form > div > input[type="text"]:valid + label,
        form > div > input[type="text"]:valid + label,
        form > div > input[type="text"]:valid + label,
        form > div > input[type="text"]:valid + label,
        form > div > input[type="text"]:valid + label,
        form > div > input[type="text"]:valid + label,
        form > div > input[type="email"]:valid + label,
        form > div > input[type="password"]:valid + label,
        form > div > input[type="tel"]:valid + label{
            opacity: 0;
        }

        form > div > input[type="text"]:invalid:not(:focus):not(:placeholder-shown),
        form > div > input[type="text"]:invalid:not(:focus):not(:placeholder-shown),
        form > div > input[type="text"]:invalid:not(:focus):not(:placeholder-shown),
        form > div > input[type="text"]:invalid:not(:focus):not(:placeholder-shown),
        form > div > input[type="text"]:invalid:not(:focus):not(:placeholder-shown),
        form > div > input[type="text"]:invalid:not(:focus):not(:placeholder-shown),
        form > div > input[type="text"]:invalid:not(:focus):not(:placeholder-shown),
        form > div > input[type="text"]:invalid:not(:focus):not(:placeholder-shown),
        form > div > input[type="text"]:invalid:not(:focus):not(:placeholder-shown),
        form > div > input[type="text"]:invalid:not(:focus):not(:placeholder-shown),
        form > div > input[type="text"]:invalid:not(:focus):not(:placeholder-shown),
        form > div > input[type="text"]:invalid:not(:focus):not(:placeholder-shown),
        form > div > input[type="email"]:invalid:not(:focus):not(:placeholder-shown),
        form > div > input[type="password"]:invalid:not(:focus):not(:placeholder-shown),
        form > div > input[type="tel"]:invalid:not(:focus):not(:placeholder-shown){
            background: url('https://webdevtrick.com/wp-content/uploads/xicon.svg');
            background-size: 20px;
            background-repeat: no-repeat;
            background-position: 415px 18px;
        }

        form > div > input[type="text"]:invalid:not(:focus):not(:placeholder-shown) + label,
        form > div > input[type="text"]:invalid:not(:focus):not(:placeholder-shown) + label,
        form > div > input[type="text"]:invalid:not(:focus):not(:placeholder-shown) + label,
        form > div > input[type="text"]:invalid:not(:focus):not(:placeholder-shown) + label,
        form > div > input[type="text"]:invalid:not(:focus):not(:placeholder-shown) + label,
        form > div > input[type="text"]:invalid:not(:focus):not(:placeholder-shown) + label,
        form > div > input[type="text"]:invalid:not(:focus):not(:placeholder-shown) + label,
        form > div > input[type="text"]:invalid:not(:focus):not(:placeholder-shown) + label,
        form > div > input[type="text"]:invalid:not(:focus):not(:placeholder-shown) + label,
        form > div > input[type="text"]:invalid:not(:focus):not(:placeholder-shown) + label,
        form > div > input[type="text"]:invalid:not(:focus):not(:placeholder-shown) + label,
        form > div > input[type="text"]:invalid:not(:focus):not(:placeholder-shown) + label,
        form > div > input[type="text"]:invalid:not(:focus):not(:placeholder-shown) + label,
        form > div > input[type="email"]:invalid:not(:focus):not(:placeholder-shown) + label,
        form > div > input[type="password"]:invalid:not(:focus):not(:placeholder-shown) + label,
        form > div > input[type="tel"]:invalid:not(:focus):not(:placeholder-shown) + label{
            opacity: 0;
        }

        form > div > input[type="text"]:invalid:not(:focus):not(:placeholder-shown) ~ .requirements,
        form > div > input[type="text"]:invalid:not(:focus):not(:placeholder-shown) ~ .requirements,
        form > div > input[type="text"]:invalid:not(:focus):not(:placeholder-shown) ~ .requirements,
        form > div > input[type="text"]:invalid:not(:focus):not(:placeholder-shown) ~ .requirements,
        form > div > input[type="text"]:invalid:not(:focus):not(:placeholder-shown) ~ .requirements,
        form > div > input[type="text"]:invalid:not(:focus):not(:placeholder-shown) ~ .requirements,
        form > div > input[type="text"]:invalid:not(:focus):not(:placeholder-shown) ~ .requirements,
        form > div > input[type="text"]:invalid:not(:focus):not(:placeholder-shown) ~ .requirements,
        form > div > input[type="text"]:invalid:not(:focus):not(:placeholder-shown) ~ .requirements,
        form > div > input[type="text"]:invalid:not(:focus):not(:placeholder-shown) ~ .requirements,
        form > div > input[type="text"]:invalid:not(:focus):not(:placeholder-shown) ~ .requirements,
        form > div > input[type="email"]:invalid:not(:focus):not(:placeholder-shown) ~ .requirements,
        form > div > input[type="password"]:invalid:not(:focus):not(:placeholder-shown) ~ .requirements,
        form > div > input[type="tel"]:invalid:not(:focus):not(:placeholder-shown) ~ .requirements{
            margin-top: 5px;
            max-height: 200px;
            padding: 5px 30px 5px 50px;
            border-top: 1px dashed #aaa;
            background-color: whitesmoke;
        }

        form > div .requirements {
            padding: 0 30px 0 50px;
            color: #C73030;
            max-height: 0;
            transition: 0.28s;
            overflow: hidden;
            font-style: italic;
            font-size: 0.8em;
        }

        form input[type="submit"]{
            display: block;
            width: 100%;
            margin: 20px 0;
            background: #41D873;
            color: white;
            border: 0;
            padding: 20px;
            font-size: 1.2rem;
        }

        /* ******************* */
        /* for all admin pages */
        /* ******************* */
    </style>

</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <!-- Navbar content -->

        <img src="{{asset('logo/CompanyLogo.png')}}" class="rounded d-block" alt="Cinque Terre" width="120"
             height="80">
        <ul class="navbar-nav ms-auto">
            <li>
                <img src="{{asset(Auth::user()->avatar)}}" alt="" style="width:40px; height:40px; float:left; border:1px solid black; border-radius:50%; margin-right:5px;">
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.profile')}}" class="nav-link">
                    {{ Auth::user()->name }}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </nav>

    <div id="wrapper" class="active">
        <!-- Sidebar -->
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav" id="sidebar">
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
        <div id="page-content-wrapper">
            <!-- Keep all page content within the page-content inset div! -->
            <div class="page-content inset">
                <div class="row">
                    <div class="col-md-12">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!--  https://code.jquery.com/jquery-3.2.1.slim.min.js -->

<!--            first parts                           -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

<!--          second parts                          -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
