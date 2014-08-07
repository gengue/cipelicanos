<!DOCTYPE html>
<html>
<head>
	<title>Look! I'm CRUDding</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('navieras') }}">Ver todas las navieras</a></li>
		<li><a href="{{ URL::to('navieras/create') }}">Crear una naviera</a>
	</ul>
</nav>

<h1>Crear una naviera</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'navieras')) }}

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

	{{ Form::submit('Crear naviera!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>