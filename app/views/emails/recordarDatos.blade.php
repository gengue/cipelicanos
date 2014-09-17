<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="utf-8">
   </head>
   <body>
      <h3>Hola {{ $usuario->nombre }},Tu contraseña ha sido reestablecida  </h3>
      <h2>Puedes modificarla cuando quieras ingresando a tu perfil </h2>
      <p>Usa las siguientes credenciales para acceder a http://localhost:8000 :</p>
      <p>
      	<strong>Usuario : </strong>{{ $usuario->correo }}<br>
      	<strong>Contraseña: </strong>{{ $usuario->normalPassword }}
     
      
      </p>
      	
   </body>
</html>

