<!-- app/views/nerds/show.blade.php -->

<!DOCTYPE html>
<html>
<head>
	<title>C.I Pelicanos Admin - Navieras</title>
	{{ HTML::style('css/bootstrap.css') }}
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('naviera') }}">Ver todas las navieras</a></li>
		<li><a href="{{ URL::to('naviera/create') }}">Crear naviera</a>
	</ul>
</nav>

<h1>Showing {{ $naviera->nombre }}</h1>

	<div class="jumbotron text-center">
		<h2>{{ $naviera->nombre }}</h2>
		<p>
			<strong>Nombre de Contacto:</strong> {{ $naviera->nombre_contacto }}<br>
			<strong>Telefono:</strong> {{ $naviera->telefono }}
			<strong>Direccion:</strong> {{ $naviera->direccion }}
		</p>
	</div>

</div>
</body>
</html>