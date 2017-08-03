<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
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
<body class="fondo-contacto">

@include('header')


<div  class="formulario-registracion">
    <form action="  " method="post">
      <fieldset>

        <h1>REGISTRATE</h1>

        <br>

        <label for="nombre"> Escribi tu nombre:</label>
        <br>
        <input type="text" name="nombre-apellido" required placeholder="Nombre y Apellido"> 

        <br><br>


        <label for="correo-electronico"> Correo electronico </label>
        <br>
        <input type="email" required name="Correo electronico" placeholder="mail@ejemplo.com">

        <br><br>

        <label for="password"> Contraseña </label>
        <br>
        <input type="password" label for="password" required name="Password" placeholder="******">

        <br><br>

        <label for="password"> Confirma tu contraseña </label>
        <br>
        <input type="password" label for="password" required name="Password" placeholder="******">

        <br><br>

        <input type="radio" name="genero" value="masc" checked> Masculino<br>
        <input type="radio" name="genero" value="fem" checked> Femenino<br>
        <input type="radio" name="genero" value="otro" checked> Otro<br>

        <br><br>

        <button class="enviar" type="submit"> Enviar </button>
      </fieldset>

    </form>
  </div>


@include('footer')

</body>
</html>
