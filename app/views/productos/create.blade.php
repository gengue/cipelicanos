
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <!--i></i-->Productos <small>Agregar un producto</small>
            </h1>
            
        </div>
    </div>
    <a class="btn btn-small btn-info" onClick="javascript:abrirProductos();"><i class="fa fa-arrow-left"></i> Atras</a>
    <br><br>
    <!-- if there are creation errors, they will show here -->
    {{ HTML::ul($errors->all()) }}

    {{ Form::open(array('', 'id' => 'formProducto')) }}

    <div class="row">
        <div class="col-md-6">
            {{ Form::label('nombre', 'Nombre') }}
            {{ Form::text('nombre', Input::old('nombre'), array('class' => 'form-control')) }}
        </div>
        <div class="col-md-6">
            {{ Form::label('proveedor', 'Proveedor') }}
            {{ Form::select('proveedor', $proveedores, Input::old('Selecciona uno'), array('class' => 'form-control')) }}
            
        </div>  
    </div>

    <div class="row">
        <div class="col-md-12">
            {{ Form::label('descripcion', 'Descripcion') }}
            {{ Form::text('descripcion', Input::old('Descripcion'), array('class' => 'form-control')) }}
        </div>	
    </div>
    <br/>

    <div class="form-group">
        <a class="btn btn-small btn-danger" onClick="javascript:abrirProductos();">Cancelar</a>
        {{ Form::submit('Crear Producto!', array('class' => 'btn btn-primary')) }}
        {{ Form::close() }}
    </div>

</div>

<script>

    $("#formProducto").submit(function(e) {
        e.preventDefault();
        
        var datos =  $("#formProducto").serialize();
        crearProducto(datos);
    });

</script>
