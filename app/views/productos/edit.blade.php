<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <!--i></i-->Producto <small>Editar producto</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> &Uacute;ltima sesi&oacute;n:
                </li>
            </ol>
        </div>
    </div>
    <a class="btn btn-small btn-info" href="javascript:abrirProductos();"><i class="fa fa-list"></i> Listar todos</a>
    <br><br>


{{ Form::model($producto, array('route' => array('productos.update', $producto->id),
            'id' => 'formEditarProducto', 
            'method' => 'PUT')) 
}}

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
                {{ Form::select('proveedor', $proveedores, $producto->proveedor->id, array('class' => 'form-control')) }}
        </div>
	
	{{ Form::submit('Editar Producto!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
</div>
<script>

    $("#formEditarProducto").submit(function(e) {
        e.preventDefault();       
        var datos = $("#formEditarProducto").serialize();
        editarProducto(datos, {{ $producto->id }});
    });

</script>