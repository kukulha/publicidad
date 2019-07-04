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
    <a href="#" data-target="menu" class="sidenav-trigger menu hide-on-med-and-up fixed"><i class="material-icons rojo-text">menu</i></a>
    <ul id="menu" class="sidenav sidenav-fixed rojo">
        <li>
            <div class="user-view">
                <a href="{{ route('home') }}"><img class="responsive-img" src="/img/logo-bco.png"></a>
            </div>
        </li>
        <li><a class="white-text titulo" href="{{ route('home') }}"><i class="material-icons white-text">home</i>Ver Página</a></li>
        <li><a class="white-text" href="{{ route('admin') }}"><i class="material-icons white-text">dashboard</i>Administración</a>
        <li class="divider"></li>
        <ul class="collapsible expandable">
            <li>
                <div class="collapsible-header center white-text"><i class="fas fa-boxes"></i>Servicios</div>
                <div class="collapsible-body">
                    <ul class="rojo">
                        <li><a class="white-text" href="{{ route('stages.index') }}">Etapas</a>
                        <li><a class="white-text" href="{{ route('services.index') }}">Servicios</a>
                    </ul>
                </div>
            </li>
            <li>
                <div class="collapsible-header center white-text"><i class="fas fa-address-book"></i>Directorio</div>
                <div class="collapsible-body">
                    <ul class="rojo">
                        <li><a class="white-text" href="{{ route('cats.index') }}">Categorías</a>
                        <li><a class="white-text" href="{{ route('directories.index') }}">Empresa</a>
                    </ul>
                </div>
            </li>
            <li>
                <div class="collapsible-header center white-text"><i class="fas fa-newspaper"></i>  Entradas</div>
                <div class="collapsible-body">
                    <ul class="rojo">
                        <li><a class="white-text" href="{{ route('categories.index') }}">Categorías</a>
                        <li><a class="white-text" href="{{ route('posts.index') }}">Artículos</a>
                    </ul>
                </div>
            </li>
        </ul>
        <li class="divider"></li>
        <li class="white-text titulo">
            <a class="white-text " href="#!" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="material-icons white-text">close</i>Cerrar Sesión</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
    
    {{-- Info --}}

    @if(session('info'))
        <div class="admin center">
            <div class="green lighten-5 section ">
                <p class="green-text text-darken-4">{{ session('info') }}</p>
            </div>
        </div>
    @endif

    @yield('content')


    
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/3d376d57db.js"></script>
    <script src="{{ asset('js/app.js') }}" ></script>
    @yield('scripts')

</body>
</html>
