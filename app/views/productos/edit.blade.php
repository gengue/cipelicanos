<!-- app/views/nerds/edit.blade.php -->

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
		<li><a href="{{ URL::to('productos') }}">Ver todos los Productos</a></li>
		<li><a href="{{ URL::to('productos/create') }}">Crear un producto</a>
	</ul>
</nav>

<h1>Editar {{ $producto->nombre }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($producto, array('route' => array('productos.update', $producto->id), 'method' => 'PUT')) }}

	<div class="form-group">
		{{ Form::label('nombre', 'Nombre') }}
		{{ Form::text('nombre', Input::old('nombre'), array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
		{{ Form::label('descripcion', 'Descripcion') }}
		{{ Form::text('descripcion', Input::old('Descripcion del producto'), array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
                {{ Form::label('proveedor', 'Proveedor') }}
                {{ Form::select('proveedor', $proveedores, $proveedor->id, array('class' => 'form-control')) }}
        </div>
	

	{{ Form::submit('Editar Producto!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>