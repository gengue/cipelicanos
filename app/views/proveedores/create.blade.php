<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <!--i></i-->Proveedores <small>Agregar un proveedor</small>
            </h1>
            
        </div>
    </div>
    <a class="btn btn-small btn-info" href="javascript:abrirProveedores();"><i class="fa fa-arrow-left"></i> Atr&aacute;s</a>
    <br><br>

    <!-- if there are creation errors, they will show here -->
    {{ HTML::ul($errors->all()) }}


    {{ Form::open(array('url' => 'proveedores', 'id' => 'formProveedores')) }}


    <div class="row">
        <div class="col-md-6">
            {{ Form::label('nombre', 'Nombre del proveedor') }}
            {{ Form::text('nombre', Input::old('nombre'), array('class' => 'form-control')) }}
        </div>
        <div class="col-md-6">
            {{ Form::label('nombre_contacto', 'Nombre de cont&aacute;cto') }}
            {{ Form::text('nombre_contacto', Input::old('nombre de contacto'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            {{ Form::label('telefono', 'Tel&eacute;fono del cont&aacute;cto') }}
            {{ Form::text('telefono', Input::old('telefono'), array('class' => 'form-control')) }}
        </div>
        <div class="col-md-6">
            {{ Form::label('direccion', 'Direcci&oacute;n del proveedor') }}
            {{ Form::text('direccion', Input::old('direccion'), array('class' => 'form-control')) }}
        </div>
    </div>
    
    <div class="form-group">
        {{ Form::label('correo', 'E-mail del cont&aacute;cto') }}
        {{ Form::text('correo', Input::old('ejemplo@dominio.com'), array('class' => 'form-control')) }}
    </div>
    <a class="btn btn-small btn-danger" href="javascript:abrirProveedores();">Cancelar</a>
    {{ Form::submit('Crear proveedor!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}


</div>

<script>

    $("#formProveedores").submit(function(e) {
        e.preventDefault();
        
        var datos =  $("#formProveedores").serialize();
        crearProveedor(datos);
    });

</script>
