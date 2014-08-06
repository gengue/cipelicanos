<!-- app/views/nerds/create.blade.php -->

<!DOCTYPE html>
<html>
<head>
	<title>Look! I'm CRUDding</title>
	{{ HTML::style('css/bootstrap.css') }}
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

<h1>Create a Nerd</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'naviera')) }}

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