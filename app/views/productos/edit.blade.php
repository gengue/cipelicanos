
<div class="container-fluid">
<div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <!--i></i-->Dashboard <small>Administrador</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> &Uacute;ltima sesi&oacute;n:
                            </li>
                        </ol>
                    </div>
                </div>
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
