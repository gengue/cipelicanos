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
		<a class="navbar-brand" href="{{ URL::to('container') }}">Nerd Alert</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('container') }}">View All</a></li>
		<li><a href="{{ URL::to('container/create') }}">Create</a>
	</ul>
</nav>

<h1>Edit {{ $container->numero_container }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($container, array('route' => array('container.update', $container->id), 'method' => 'PUT')) }}

	<div class="form-group">
		{{ Form::label('numero_container', 'Numero de Container') }}
		{{ Form::text('numero_container', Input::old('nombre'), array('class' => 'form-control')) }}
	</div>
	{{ Form::submit('Edit!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>