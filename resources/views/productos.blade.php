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
    <li><a href="index">Home</a></li>
    <li><a href="productos">Productos</a></li>  
  </ol>
</div>

<div class="categoria-mujer">
<h1><a href="productos/mujeres">MUJERES</a> </h1>
</div>

<div class="categoria-hombre">
<h1><a href="productos/hombres">HOMBRES</a> </h1>
</div>

<div class="categoria-nenes">
<h1><a href="productos/nenes">NIÑOS</a> </h1>
</div>



@include('footer')

</body>
</html>