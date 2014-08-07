<!-- app/views/nerds/edit.blade.php -->

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
		<li><a href="{{ URL::to('navieras') }}">View All Nerds</a></li>
		<li><a href="{{ URL::to('navieras/create') }}">Create a Nerd</a>
	</ul>
</nav>

<h1>Edit {{ $naviera->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($naviera, array('route' => array('navieras.update', $naviera->id), 'method' => 'PUT')) }}

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

	{{ Form::submit('Edit the Nerd!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>