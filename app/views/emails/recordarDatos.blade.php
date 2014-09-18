<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="utf-8">
   </head>
   <body>
      <h2>Hola {{ $usuario->nombre }}, tu contraseña ha sido reestablecida  </h2>
      <h3>Puedes modificarla cuando quieras ingresando a tu perfil </h3>
      <p>Usa las siguientes credenciales para acceder a http://localhost:8000 :</p>
      <p>
      	<strong>Usuario : </strong>{{ $usuario->correo }}<br>
      	<strong>Contraseña: </strong>{{ $usuario->normalPassword }}
     
      
      </p>
      	
   </body>
</html>

