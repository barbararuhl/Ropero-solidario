<!DOCTYPE html>
<html>
<head>
  <title>Productos</title>
  <link rel="stylesheet" href="{{ URL::asset('../../public/css/home.css') }}" />
  <link rel="icon" type="image/png" href="img/icono.png">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body class="fondo-productos">

@include('header')

<div class="#">                   
  <ol class="breadcrumb">
    <li><a href="/index">Home</a></li>
    <li><a href="/productos">Productos</a></li>  
  </ol>
</div>

<div class="productos">

<div class="categoria-mujer">
    <img class="pic-categorias" src="/img/productos/cat-mujeres.jpg" alt="Avatar">
    <br>
    <a href="/productos/mujeres">MUJERES</a>
</div>


<div class="categoria-hombre">
    <img class="pic-categorias" src="/img/productos/cat-hombres.jpg">
    <br>
    <a href="/productos/hombres">HOMBRES</a>
</div>


<div class="categoria-nenes">
    <img class="pic-categorias" src="/img/productos/cat-nenes.jpg">
    <br>
    <a href="/productos/nenes">NIÑOS</a>
</div>
</div>

@include('footer')

</body>
</html>