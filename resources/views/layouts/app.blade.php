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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- Styles -->
    <link href=" {{url('../web/assets/fontawesome/css/font-awesome.min.css')}}" rel="stylesheet" media="screen" type="text/css" />
    <link href="{{url('../web/assets/jquery-ui/themes/smoothness/theme.css')}}" rel="stylesheet" media="screen" type="text/css" />
    <link href="{{url('../web/assets/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet" media="screen" type="text/css" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">





    <link href="{{url('../web/assets/jquery-ui/themes/smoothness/jquery-ui.min.css')}}" rel="stylesheet" media="screen" type="text/css" />
    <link href="{{url('../web/assets/mediaelement/build/mediaelementplayer.min.css')}}" rel="stylesheet" media="screen" type="text/css" />
    <link href="{{url('../web/assets/jqueryui-timepicker-addon/dist/jquery-ui-timepicker-addon.min.css')}}" rel="stylesheet" media="screen" type="text/css" />
    <link href="{{url('../web/assets/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet" media="screen" type="text/css" />
    <link href="{{url('../web/assets/jquery.scrollbar/jquery.scrollbar.css')}}" rel="stylesheet" media="screen" type="text/css" />
    <link href="{{url('../web/assets/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet" media="screen" type="text/css" />
    <link href="{{url('../web/assets/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet" media="screen" type="text/css" />
    <link href="{{url('../web/assets/select2/dist/css/select2.min.css')}}" rel="stylesheet" media="screen" type="text/css" />
    <link href="{{url('../web/assets/flag-icon-css/css/flag-icon.min.css')}}" rel="stylesheet" media="screen" type="text/css" />

    <link href="{{url('../elementos/default.css')}}" rel="stylesheet" media="screen" type="text/css" />

    <script src="{{url('../web/assets/modernizr/modernizr.js')}}"></script>
    <script src="{{url('../web/assets/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{url('../web/assets/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{url('../web/assets/jquery-ui/jquery-ui.min.js')}}"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.0/css/jquery.dataTables.min.css">

<style>
    .navbar{
        height: 2px;
}
.container{
    height: 2.4cm;
}

</style>

</head>
<body class="page_origin_ py-4">
    <main id="main" dir="ltr" class="section-platform_admin ">
        <noscript>Su navegador no tiene activado JavaScript.
    Chamilo se sirve de JavaScript para proporcionar un interfaz más dinámico. Es probable que muchas prestaciones sigan funcionando pero otras no lo harán, especialmente las relacionadas con la usabilidad. Le recomendamos que cambie la configuración de su navegador y recargue esta página.</noscript>


                                <!-- START HEADER -->
                    <header id="cm-header">
                        <div id="navigation" class="notification-panel">


    </div>
        <!-- Topbar -->

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-3 ">
                <p></p>
                            <div class="logo">

                    <a href="{{ url('/') }}"  ><img title="My campus" class="img-responsive" id="header-logo" src="{{url('../elementos/images/header-logo.png')}}" alt="My Organisation"  /></a>
                </div>
            </div>

        </div>
    </div>

    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="pull-right  navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>


            </div>

            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">

                                                <li class="homepage ">
                                <a href="https://emprende-actua.com/index.php"  title="Página principal">
                                    Página principal
                                </a>
                            </li>

                                                <li class="my-course ">
                                <a href="https://emprende-actua.com/user_portal.php"  title="Mis cursos">
                                    Mis cursos
                                </a>
                            </li>

                            @guest
                            @else

<?php
$rol=substr(Auth::user()->roles,0,3);
if($rol=="a:1"){
    {{ echo '<li class="admin active">
<a href="https://emprende-actua.com/main/admin/"  title="Administración">
Administración
</a>
</li>'; }}
}

?>



                            @endguest
                        </ul>
                        @guest
                        @else
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="user-body">
                                        <a id="logout_button" title="Salir" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                            <em class="fa fa-sign-out"></em>  Salir
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>

                                        </ul>
                                        @endguest
                        </div><!--/.nav-collapse -->
        </div>
    </nav>
                <div class="nav-tools">

            </div>
                        </header>
                        <main class="py-4">
                            @yield('content')
                        </main>
</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.js"></script>

</html>
