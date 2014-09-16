
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <!--i></i-->Productos <small>Agregar un producto</small>
            </h1>
            
        </div>
    </div>
    <a class="btn btn-small btn-info" href="javascript:abrirProductos();"><i class="fa fa-arrow-left"></i> Atras</a>
    <br><br>
    <!-- if there are creation errors, they will show here -->
    {{ HTML::ul($errors->all()) }}

    {{ Form::open(array('', 'id' => 'formProducto')) }}

    <div class="form-group">
        {{ Form::label('nombre', 'Nombre') }}
        {{ Form::text('nombre', Input::old('nombre'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('descripcion', 'Descripcion') }}
        {{ Form::text('descripcion', Input::old('Descripcion'), array('class' => 'form-control')) }}
    </div>          
    <div class="form-group">
        {{ Form::label('proveedor', 'Proveedor') }}
        {{ Form::select('proveedor', $proveedores, Input::old('Selecciona uno'), array('class' => 'form-control')) }}
    </div>	
    <a class="btn btn-small btn-danger" href="javascript:abrirProductos();">Cancelar</a>
    {{ Form::submit('Crear Producto!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>

<script>

    $("#formProducto").submit(function(e) {
        e.preventDefault();
        
        var datos =  $("#formProducto").serialize();
        crearProducto(datos);
    });

</script>
