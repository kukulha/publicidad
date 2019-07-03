<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }} || @yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
        {{-- Menu de Navegación --}}
        <div class="navbar-fixed">
            @if(request()->is('/'))
                <nav class="navbar transparent z-depth-0" id="menu">
                    <div class="nav-wrapper container">
                        <a href="{{ route('home') }}" class="brand-logo"><img src="/img/logo-bco.png" alt="" width="180px"></a>
                        <a href="#" data-target="movil" class="sidenav-trigger"><i class="material-icons left">menu</i></a>
                        <ul class="hide-on-med-and-down right">
                            <li><a href="{{ route('home') }}" class="title bold menu">Inicio</a></li>
                            <li><a href="{{ route('directory') }}" class="title bold menu">Directorio</a></li>
                            <li><a href="" class="title bold menu">Contacto</a></li>
                            <li><a href="" class="title bold menu">Blog</a></li>
                        </ul>
                    </div>
                </nav>
            @else
                <nav class="navbar transparent z-depth-0" id="menu2">
                    <div class="nav-wrapper container">
                        <a href="{{ route('home') }}" class="brand-logo"><img src="/img/logo.png" alt="" width="180px"></a>
                        <a href="#" data-target="movil" class="sidenav-trigger"><i class="material-icons left azul-text">menu</i></a>
                        <ul class="hide-on-med-and-down right">
                            <li><a href="{{ route('home') }}" class="azul-text title bold">Inicio</a></li>
                            <li><a href="{{ route('directory') }}" class="azul-text title bold">Directorio</a></li>
                            <li><a href="" class="azul-text title bold">Contacto</a></li>
                            <li><a href="" class="azul-text title bold">Blog</a></li>
                        </ul>
                    </div>
                </nav>
            @endif
        </div>

        {{-- Menu Movil --}}

        <ul class="sidenav rojo" id="movil">
            <li><a href="{{ route('home') }}" class="white-text bold">Inicio</a></li>
            <li><a href="{{ route('directory') }}" class="white-text bold">Directorio</a></li>
            <li><a href="" class="white-text bold">Contacto</a></li>
            <li><a href="" class="white-text bold">Blog</a></li>
        </ul>

        {{-- Boton Inicio Sesión/Panel de Control --}}
        @guest
            <div class="fixed-action-btn">
                <a href="{{ route('login') }}" class="btn-floating btn-large tooltipped rojo" data-position="left" data-tooltip="Iniciar Sesión">
                    <i class="large material-icons">person</i>
                </a>
            </div>
        @else
            <div class="fixed-action-btn">
                <a class="btn-floating btn-large rojo">
                    <i class="large material-icons">dashboard</i>
                </a>
                <ul>
                <li><a href="{{ route('admin') }}" class="btn-floating rojo tooltipped" data-position="left" data-tooltip="Administración"><i class="material-icons">insert_chart</i></a></li>
                <li><a class="btn-floating rojo tooltipped" data-position="left" data-tooltip="Cerrar Sesión" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="material-icons">close</i>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </a></li>
                </ul>
            </div>
        @endauth

        @yield('content')

        <!-- Scripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://kit.fontawesome.com/3d376d57db.js"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        @yield('scripts')

</body>
</html>
