<!DOCTYPE html>
<html>
<head>
	<title>Contacto</title>
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

<div class="formulario-contacto">
 
         <form action="/contacto" method="post">
         {{ csrf_field() }}
          <fieldset>
            <h4>CONTACTANOS</h4>
           

            <label for="nombre"> Escribi tu nombre:</label>
            <br>
            @if ($errors->has('nombre'))
                <span class="help-block">
                <strong>{{ $errors->first('nombre') }}</strong>
                </span>
             @endif
            <input class="input-contacto" type="text" name="nombre" required placeholder="Nombre y Apellido"> 
            <br>

        
            <input type="radio" name="genero" value="femenino"> 
            <span class="radio-genero">Femenino</span>
            <input type="radio" name="genero" value="masculino"> 
            <span class="radio-genero">Masculino</span>
            <input type="radio" name="genero" value="otro"> 
            <span class="radio-genero">Otro</span>
            <br><br>

            <label for="email"> Correo electroico </label>
            <br>
            <input class="input-contacto" type="email" required name="email" placeholder="mail@ejemplo.com">
            @if ($errors->has('email'))
                <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
                </span>
             @endif
            <br>


            <label for="telefono"> Telefono </label>
            <br>
            @if ($errors->has('telefono'))
                <span class="help-block">
                <strong>{{ $errors->first('telefono') }}</strong>
                </span>
             @endif
            <input class="input-contacto" type="text" required name="telefono" placeholder="Telefono">
            <br>



            <label for="mensaje"> Mensaje </label>
            <br>
             @if ($errors->has('mensaje'))
                <span class="help-block">
                <strong>{{ $errors->first('mensaje') }}</strong>
                </span>
             @endif
            <input class="input-contacto" type="text" required name="mensaje" placeholder="Escriba su mensaje aqui..">
            <span class="highlight"></span>
            <span class="bar"></span>
            <br>

            <button type="submit" class="button button4">Enviar!</button>
            <br>


         </form>
        </fieldset>

</div>

@include('footer')

</body>
</html>
