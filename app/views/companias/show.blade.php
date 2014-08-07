<!-- app/views/nerds/show.blade.php -->

<!DOCTYPE html>
<html>
<head>
	<title>C.I Pelicanos Admin - Compañias</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('companias') }}">Ver todas las navieras</a></li>
		<li><a href="{{ URL::to('companias/create') }}">Crear companias</a>
	</ul>
</nav>

<h1>Showing {{ $companias->nombre }}</h1>

	<div class="jumbotron text-center">
		<h2>{{ $companias->nombre }}</h2>
		<p>
			<strong>Nit:</strong> {{ $companias->nit }}<br>
			<strong>Telefono:</strong> {{ $companias->telefono }}
			<strong>Correo:</strong> {{ $companias->correo }}
			<strong>Usuario:</strong> {{ $companias->id_usuario }}
		</p>
	</div>

</div>
</body>
</html>