<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <!--i></i-->Producto <small>Editar producto</small>
            </h1>
           
        </div>
    </div>
    <a class="btn btn-small btn-info" onClick="javascript:abrirProductos();"><i class="fa fa-arrow-left"></i> Atras</a>
    <br><br>


{{ Form::model($producto, array('route' => array('productos.update', $producto->id),
            'id' => 'formEditarProducto', 
            'method' => 'PUT')) 
}}

	<div class="row">
        <div class="col-md-6">
		  {{ Form::label('nombre', 'Nombre') }}
		  {{ Form::text('nombre', Input::old('nombre'), array('class' => 'form-control')) }}
	    </div>

	    <div class="col-md-6">
            {{ Form::label('proveedor', 'Proveedor') }}
            {{ Form::select('proveedor', $proveedores, $producto->proveedor->id, array('class' => 'form-control')) }}
	    </div>
    </div>    
	<div class="row">
        <div class="col-md-12">
            {{ Form::label('descripcion', 'Descripcion') }}
          {{ Form::text('descripcion', Input::old('Descripcion del producto'), array('class' => 'form-control')) }}
             </div>
    </div>
    <br/>

    <div class="form-group">
	   <a class="btn btn-small btn-danger" onClick="javascript:abrirProductos();">Cancelar</a>
	   {{ Form::submit('Editar Producto!', array('class' => 'btn btn-primary')) }}
        {{ Form::close() }}
    </div>
</div>
<script>

    $("#formEditarProducto").submit(function(e) {
        e.preventDefault();       
        var datos = $("#formEditarProducto").serialize();
        editarProducto(datos, {{ $producto->id }});
    });

</script>