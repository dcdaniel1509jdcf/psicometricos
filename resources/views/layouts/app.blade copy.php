<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="icon" href="{{url('../chamilo/favicon.ico')}}" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Emprende y Actua</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/coloraxis.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 300;
            src: local('Open Sans Light'), local('OpenSans-Light'), url(../chamilo/fonts/OpenSans-Light.woff2) format('woff2'), url(../chamilo/fonts/OpenSans-Light.woff) format('woff');
          }
          @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            src: local('Open Sans'), local('OpenSans'), url(../chamilo/fonts/OpenSans.woff2) format('woff2'), url(../chamilo/fonts/OpenSans.woff) format('woff');
          }
          @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 600;
            src: local('Open Sans Semibold'), local('OpenSans-Semibold'), url(../chamilo/fonts/OpenSans-Semibold.woff2) format('woff2'), url(../chamilo/fonts/OpenSans-Semibold.woff) format('woff');
          }
          @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 700;
            src: local('Open Sans Bold'), local('OpenSans-Bold'), url(../chamilo/fonts/OpenSans-Bold.woff2) format('woff2'), url(../chamilo/fonts/OpenSans-Bold.woff) format('woff');
          }
          html {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
          }
          body {
            margin: 0;
            font-family: 'Open Sans', sans-serif;
            line-height: 1.72222;
          }
          a{
            color: #818181;
          }
          a:hover{
            color: #910387;
            text-decoration: none;
          }
          /*header{
            background: url("images/background.png") repeat-x center -30px;
          }*/
          .navbar-default {
            background: #4f5358;
            background: -moz-linear-gradient(top, #910387 0%,#910387 100%);
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#910387), color-stop(100%,#910387));
            background: -webkit-linear-gradient(top, #910387 0%,#910387 100%);
            background: -o-linear-gradient(top, #910387 0%,#910387 100%);
            background: -ms-linear-gradient(top, #910387 0%,#910387 100%);
            background: linear-gradient(to bottom, #910387 0%,#910387 100%);
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#910387', endColorstr='#910387',GradientType=0 );
            border-right: none;
            border-left: none;
            border-top: none;
            border-bottom: 1px solid #8992b3;
          }
          .navbar-default .navbar-brand {
            color: #ffffff;
          }
          .navbar-default .navbar-brand:hover, .navbar-default .navbar-brand:focus {
            color: #ededed;
          }
          .navbar-default .navbar-text {
            color: #ffffff;
          }
          .navbar-default .navbar-nav > li > a {
            color: #ffffff;
          }
          .navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus {
          color: black;
          background: #94bb1d;
          background: -moz-linear-gradient(top, white 40%, #5b0050 100%);
          background: -webkit-gradient(linear, left top, left bottom, color-stop(40%,white), color-stop(100%, #5b0050));
          background: -webkit-linear-gradient(top, white 40%, #5b0050 100%);
          background: -o-linear-gradient(top, white 40%, #5b0050 100%);
          background: -ms-linear-gradient(top, white 40%, #5b0050 100%);
          background: linear-gradient(to bottom, white 40%, #5b0050 100%);
          filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='white', endColorstr='#5b0050',GradientType=0 );
          }
          .navbar-default .navbar-nav > li > .dropdown-menu {
            background: linear-gradient(to bottom, #5b0050 9%, white 40%);
          }
          .navbar-default .navbar-nav > li > .dropdown-menu > li > a {
            color: #ffffff;
          }
          .navbar-default .navbar-nav > li > .dropdown-menu > li > a:hover,
          .navbar-default .navbar-nav > li > .dropdown-menu > li > a:focus {
          color: #ededed;
          background:  #5b0050;
          background: -moz-linear-gradient(top, #5b0050 0%,#5b0050 100%);
          background: -webkit-gradient(linear, left top, left bottom, color-stop(0% #5b0050), color-stop(100% #5b0050));
          background: -webkit-linear-gradient(top, #5b0050 0%,#5b0050 100%);
          background: -o-linear-gradient(top, #5b0050 0%,#5b0050 100%);
          background: -ms-linear-gradient(top, #5b0050 0%,#5b0050 100%);
          background: linear-gradient(to bottom, #5b0050 0%,#5b0050 100%);
          filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#5b0050', endColorstr='#5b0050',GradientType=0 );
          }
          .navbar-default .navbar-nav > li > .dropdown-menu > li > .divider {
            background-color: #0099c0;
          }
          .navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {
          color: white;
          background: #5b0050;
          background: -moz-linear-gradient(top, #5b0050 40%, #5b0050 100%);
          background: -webkit-gradient(linear, left top, left bottom, color-stop(40%,#5b0050), color-stop(100%,#5b0050));
          background: -webkit-linear-gradient(top,#5b0050 40%, #5b0050 100%);
          background: -o-linear-gradient(top, #5b0050 40%, #5b0050 100%);
          background: -ms-linear-gradient(top, #5b0050 40%, #5b0050 100%);
          background: linear-gradient(to bottom, #5b0050 40%, #5b0050 100%);
          filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#5b0050', endColorstr='#5b0050 ',GradientType=0 );
          }
          .navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:hover, .navbar-default .navbar-nav > .open > a:focus {
          color: #FFFFFF;
          background: #5b0050;
          }
          .navbar-default .navbar-toggle {
            border-color: white;
          }
          .navbar-default .navbar-toggle:hover, .navbar-default .navbar-toggle:focus {
            background-color: #5b0050;
          }
          .navbar-default .navbar-toggle .icon-bar {
            background-color: #ffffff;
          }
          .navbar-default .navbar-collapse,
          .navbar-default .navbar-form {
            border-color: #ffffff;
          }
          .navbar-default .navbar-link {
            color: #ffffff;
          }
          .navbar-default .navbar-link:hover {
            color: #ededed;
          }

          @media (max-width: 767px) {
            .navbar-default .navbar-nav .open .dropdown-menu > li > a {
              color: #2c3e50;
            }
            .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover, .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
              color: #ededed;
            }
            .navbar-default .navbar-nav .open .dropdown-menu > .active > a, .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover, .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
              color: #ededed;
              background-color: #0099c0;
            }
          }
          footer.bgfooter{
            background: #000000;
            color: #5b0050;
            border-top: 4px solid #5b0050;
          }
          footer.bgfooter a{
            color: #ffffff;
          }
          footer.bgfooter a:hover{
            color: #CCC;
          }
          .nav li a:hover{
              background: none;
          }
          .breadcrumb{
            padding: 8px 15px;
            margin-bottom: 21px;
            list-style: outside none none;
            background-color: #ECF0F1;
          }
          .breadcrumb > .active{
            color: #95a5a6;
          }
          .panel-default{
            border-color: #ECF0F1;
          }
          .panel-default .panel-heading{
            color: #ffffff;
            background-color: #5b0050;
            border-color: #910387;
          }

          /* barras superiores - iconos*/
          .breadcrumb {
            color: white;
            padding: 8px 15px;
            margin-bottom: 21px;
            list-style: outside none none;
            background-color: #5b0050;
          }
          .actions {
              background: #910387;
              border: 1px solid #dddddd;
              padding: 10px;
              border-radius: 4px;
              -moz-border-radius: 4px;
              -webkit-border-radius: 4px;
              box-shadow: 0 1px 1px rgb(0 0 0 / 5%);
              margin-bottom: 20px;
          }
          .table-well {
            color: white;
            background: #5b0050;
            border: 1px solid #5b0050;
            padding: 10px;
            border-radius: 4px;
            -moz-border-radius: 4px;
            -webkit-border-radius: 4px;
            box-shadow: 0 1px 1px rgb(0 0 0 / 5%);
            margin-bottom: 20px;
          }
          .nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
            color: #fff;
            cursor: default;
            background-color: #5b0050;
            border: 1px solid #ddd;
            border-bottom-color: transparent;
          }

          /* botones */
          .btn-primary {
            color: #fff;
            background-color: #5b0050;
            border-color: #5b0050;
          }
          .btn-primary:focus,
          .btn-primary.focus {
            color: #fff;
            background-color: #5b0050;
            border-color: #5b0050;
          }
          .btn-primary:hover {
            color: #fff;
            background-color: #3f003b;
            border-color: #3f003b;
          }
          .btn-primary:active,
          .btn-primary.active,
          .open > .dropdown-toggle.btn-primary {
            color: #fff;
            background-color: #5b0050;
            background-image: none;
            border-color: #5b0050;
          }
          .btn-primary:active:hover,
          .btn-primary.active:hover,
          .open > .dropdown-toggle.btn-primary:hover,
          .btn-primary:active:focus,
          .btn-primary.active:focus,
          .open > .dropdown-toggle.btn-primary:focus,
          .btn-primary:active.focus,
          .btn-primary.active.focus,
          .open > .dropdown-toggle.btn-primary.focus {
            color: #fff;
            background-color: #5b0050;
            border-color: #5b0050;
          }
          .btn-primary.disabled:hover,
          .btn-primary[disabled]:hover,
          fieldset[disabled] .btn-primary:hover,
          .btn-primary.disabled:focus,
          .btn-primary[disabled]:focus,
          fieldset[disabled] .btn-primary:focus,
          .btn-primary.disabled.focus,
          .btn-primary[disabled].focus,
          fieldset[disabled] .btn-primary.focus {
            background-color: #5b0050;
            border-color: #5b0050;
          }
          .btn-primary .badge {
            color: #5b0050;
            background-color: #fff;
          }

          /* footer */
          .footer {
            bottom: 0;
            width: 100%;
            /* Set the fixed height of the footer here */
            height: auto;
            color: white;
            background-color: #5b0050;
            display: inline-flex;
            padding-bottom: 15px;
          }
          .alert-info {
            color: #ffffff;
            background-color: #5b0050;
            border-color: #5b0050;
          }
          .table-bordered>tbody>tr>td, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>td, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>thead>tr>th {
            border: 1px solid #910387;
          }
    </style>
</head>
<body>
    <div id="app">

        <header id="cm-header"  style="background-image: url({{url('../chamilo/background.png')}});background-size: cover;">
            <div id="navigation" class="notification-panel">


                </div>
                <!-- Topbar -->

                <div class="container">
                <div class="row">
                <div class="col-xs-12 col-md-3">
                                <div class="logo py-4">
                        <a href="http://localhost/chamilo/index.php"  ><img title="My campus" class="img-responsive" id="header-logo" src="{{url('../chamilo/header-logo.png')}}" alt="My Logo"  /></a>
                    </div>
                </div>

                </div>
                </div>

                <!-- Fixed navbar -->


        </header>

        <nav class="navbar navbar-default navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">

                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesion') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registro') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="dropdown">
                            <a id="navbar dropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>

                                <img class="rounded-circle" src="{{url('../chamilo/unknown.png')}}" alt=" {{ Auth::user()->name }}">
                                <span class="username-movil"> {{ Auth::user()->name }}</span>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li class="user-header">
                                    <div class="text-center">
                                        <a href="/">
                                            <img class="rounded-circle py-4" src="{{url('../chamilo/unknown.png')}}" alt="Test">
                                            <p class="name"> {{ Auth::user()->name }}</p>
                                            <p class="far fa-envelope username-movil">{{Auth::user()->email }}</p>
                                        </a>

                                    </div>
                                </li>

                                <li class="user-body">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                                  <em class="fa fa-sign-out"></em> {{ __('Salir') }}
                                 </a>

                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                     @csrf
                                 </form>

                                </li>
                            </ul>
                        </li>


                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
</html>
