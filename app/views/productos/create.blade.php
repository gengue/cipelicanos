
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <!--i></i-->Productos <small>Agregar un producto</small>
            </h1>
            
        </div>
    </div>
    <a class="btn btn-small btn-info" href="javascript:abrirProductos();"><i class="fa fa-arrow-left"></i> Atr&aacute;s</a>
    <br><br>
    <!-- if there are creation errors, they will show here -->
    {{ HTML::ul($errors->all()) }}

    {{ Form::open(array('', 'id' => 'formProducto')) }}

    <div class="row">
        <div class="col-md-6">
            {{ Form::label('nombre', 'Nombre del producto') }}
            {{ Form::text('nombre', Input::old('nombre'), array('class' => 'form-control')) }}
        </div>
        <div class="col-md-6">
            {{ Form::label('proveedor', 'Proveedor del producto') }}
            {{ Form::select('proveedor', $proveedores, Input::old('Selecciona uno'), array('class' => 'form-control')) }}
            
        </div>  
    </div>

    <div class="row">
        <div class="col-md-12">
            {{ Form::label('descripcion', 'Descripci&oacute;n del producto') }}
            {{ Form::text('descripcion', Input::old('Descripcion'), array('class' => 'form-control')) }}
        </div>	
    </div>
    <br/>

    <div class="form-group">
        <a class="btn btn-small btn-danger" href="javascript:abrirProductos();">Cancelar</a>
        {{ Form::submit('Crear producto!', array('class' => 'btn btn-primary')) }}
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
