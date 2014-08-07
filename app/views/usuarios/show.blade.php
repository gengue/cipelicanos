<!-- app/views/nerds/show.blade.php -->

<!DOCTYPE html>
<html>
<head>
	<title>C.I Pelicanos Admin - Proveedores</title>
	{{ HTML::style('css/bootstrap.css') }}
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('proveedores') }}">Ver todas los proveedores</a></li>
		<li><a href="{{ URL::to('proveedores/create') }}">Crear proveedor</a>
	</ul>
</nav>

<h1>Detalle de {{ $proveedor->nombre }}</h1>

	<div class="jumbotron text-center">
		<h2>{{ $proveedor->nombre }}</h2>
		<p>
			<strong>Nombre de Contacto:</strong> {{ $proveedor->nombre_contacto }}<br>
			<strong>Telefono:</strong> {{ $proveedor->telefono }}
			<strong>Direccion:</strong> {{ $proveedor->direccion }}
			<strong>Email:</strong> {{ $proveedor->correo }}
		</p>
	</div>

</div>
</body>
</html>