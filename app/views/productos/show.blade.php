<!-- app/views/nerds/show.blade.php -->

<!DOCTYPE html>
<html>
<head>
	<title>C.I Pelicanos Admin - Productos</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('productos') }}">Ver todos los productos</a></li>
		<li><a href="{{ URL::to('productos/create') }}">Crear producto</a>
	</ul>
</nav>

<h1>Detalle de {{ $producto->nombre }}</h1>

	<div class="jumbotron text-center">
		<h2>{{ $producto->nombre }}</h2>
		<p>
			<strong>Descripcion:</strong> {{ $producto->descripcion }}<br>
			<strong>Proveedor:</strong> {{ $proveedor->nombre }}
		</p>
	</div>

</div>
</body>
</html>