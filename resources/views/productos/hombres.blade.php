<!DOCTYPE html>
<html>
<head>
  <title>Productos Hombres</title>
  <link rel="stylesheet" href="{{ URL::asset('../../public/css/home.css') }}" />
  <link rel="icon" type="image/png" href="/img/icono.png">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/estilos.css">
</head>
<body class="fondo-productos-hombres">

@include('header')

<div class="#">                   
  <ol class="breadcrumb">
    <li><a href="/index">Home</a></li>
    <li><a href="/productos">Productos</a></li>
    <li><a href="/productos/hombres">Hombres</a></li>  
  </ol>
</div>


<div class="productos">
<div>
  <ul>
    @foreach ($productos as $producto)
    <div class="producto-div">
    <li>
        
      <img class="picproduto-general" src="/img/productos/todos/9.jpg" />
      <h2> <a href="/producto"> {{$producto->prenda}} </a></h2>

       <p> {{$producto->detalle}} </p>

       <h4> $ {{$producto->precio}} - Talle: {{$producto->talle}} </h4> 

    </li>
    </div>
    @endforeach
  </ul>

  {{$productos->links()}}
</div>


</body>
</html>
