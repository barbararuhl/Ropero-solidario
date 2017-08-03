<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="{{ URL::asset('../../public/css/home.css') }}" />
	<link rel="icon" type="image/png" href="img/Logo-negro.png">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body class="fondo-home">

@include('header')

<div class="seccion-home">

<img src="img/Logo-prueba.png" width="200px">

    <h4>VINTAGE</h4>

    <h5>Piezas Vintage originales, no hay dos iguales. Ni con la misma historia</h5><br>


  <h4>INTERVENIDAS</h4>

  <h5>Diseñadas por nuestro equipo y hechas en Argentina a partir de vieja indumentaria</h5><br>


  <h4>RECICLADAS</h4>

  <h5>Conjuntos reimaginados por nuestro equipos de innivación</h5><br>




</div>



@include('footer')

</body>
</html>
