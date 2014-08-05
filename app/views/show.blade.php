<!-- app/views/nerds/show.blade.php -->

<!DOCTYPE html>
<html>
<head>
	<title>Look! I'm CRUDding</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('naviera') }}">Nerd Alert</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('naviera') }}">View All Nerds</a></li>
		<li><a href="{{ URL::to('naviera/create') }}">Create a Nerd</a>
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