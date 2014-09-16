<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="utf-8">
   </head>
   <body>
      <h3>Hola {{ $usuario->nombre }}, Tu cuenta ha sido creada</h3>
      <p>Usa las siguientes credenciales para acceder a http://localhost:8000 :</p>
      <p>
      	<strong>Usuario : </strong>{{ $usuario->correo }}<br>
      	<strong>Contraseña: </strong>{{ $usuario->normalPassword }}
      </p>
      	
   </body>
</html>