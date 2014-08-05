<!-- app/views/nerds/create.blade.php -->

<!DOCTYPE html>
<html>
<head>
	<title>C.I Pelicamos admin - Proveedores</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('proveedores') }}">Ver todos los proveedores</a></li>
		<li><a href="{{ URL::to('proveedores/create') }}">Crear un proveedor</a>
	</ul>
</nav>

<h1>Crear un proveedor</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'proveedores')) }}

	<div class="form-group">
		{{ Form::label('nombre', 'Nombre') }}
		{{ Form::text('nombre', Input::old('nombre'), array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
		{{ Form::label('nombre_contacto', 'Nombre de Contacto') }}
		{{ Form::text('nombre_contacto', Input::old('nombre de contacto'), array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
		{{ Form::label('telefono', 'Telefono') }}
		{{ Form::text('telefono', Input::old('telefono'), array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
		{{ Form::label('direccion', 'Direccion') }}
		{{ Form::text('direccion', Input::old('direccion'), array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
		{{ Form::label('correo', 'Email') }}
		{{ Form::text('correo', Input::old('ejemplo@dominio.com'), array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('Crear Proveedor!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>