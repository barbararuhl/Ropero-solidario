<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/estilos.css">
</head>
<body class="fondo-login">
        <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index"><img src="/img/Logo-prueba.png" alt="logotipo" class="logo" width="30px"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="nosotros">Nosotros</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown">Productos <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="productos">Categorias</a></li>
            <li><a href="productos/mujeres">Mujeres</a></li>
            <li><a href="productos/hombres">Hombres</a></li>
            <li><a href="productos/nenes">Niños</a></li>
          </ul>
        </li>
        <li><a href="contacto">Contacto</a></li>
      </ul>


      <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>


    </div>
  </div>
</nav>
        @yield('content')
 

<nav class="navbar navbar-inverse fixed-footer">
        <ul class="nav navbar-nav">
            <li><a href="faqs">Preguntas Frecuentes</a></li>
            <li><a href="contacto">Contacto</a></li>
        </ul>
</nav>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
