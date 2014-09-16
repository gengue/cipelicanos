<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="utf-8">
   </head>
   <body>
      <h3>Hola {{ $usuario->nombre }}, Tienes un nuevo pedido</h3>
      <p>Los datos basicos son los siguientes: </p>
      <p>
      	<strong>Producto : </strong>{{ $pedido->producto->nombre }}<br>
      	<strong>Naviera: </strong>{{ $pedido->naviera->nombre }}<br>
         <strong>Fecha: </strong>{{ $pedido->fecha_carga }}<br>
         <strong>Buque: </strong>{{ $pedido->buque }}
      </p>
      <p>Para mas informacion ingresa a http://localhost:8000</p> 	
   </body>
</html>